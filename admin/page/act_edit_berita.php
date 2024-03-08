<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:../index.php');
    exit; // Penting untuk menghentikan eksekusi setelah melakukan redirect
} else {
    $username = $_SESSION['admin'];
}

require_once("../config/koneksi.php");

// Perbarui data admin
$queryAdmin = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
$dataAdmin = mysqli_fetch_array($queryAdmin);

$idBerita = $_POST['id'];
$judulBerita = $_POST['judul'];
$tanggalBerita = $_POST['tgl'];
$detailBerita = $_POST['detail'];

// Perbarui berita jika ada file yang diunggah
if(isset($_FILES['image'])){
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.', $file_name)));
    
    $allowed_extensions = array("jpeg", "jpg", "png");
    
    if(!in_array($file_ext, $allowed_extensions)){
        $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
        $errors[] = 'File size must be exactly 2 MB';
    }
    
    if(empty($errors)){
       // Pindahkan file yang diunggah ke direktori yang ditentukan
        move_uploaded_file($file_tmp, "../foto/berita/" . $file_name);
        // echo "Success";
        

        // Perbarui data berita dengan nama file baru jika ada file yang diunggah
        $queryUpdate = "UPDATE berita SET judul = '$judulBerita', tgl = '$tanggalBerita', foto = '$file_name', detail = '$detailBerita' WHERE id = $idBerita";
        $sql = mysqli_query($conn, $queryUpdate);
    } else {
        print_r($errors);
    }
} else {
    // Jika tidak ada file yang diunggah, perbarui data berita tanpa mengubah gambar
    $queryUpdate = "UPDATE berita SET judul = '$judulBerita', tgl = '$tanggalBerita', detail = '$detailBerita' WHERE id = $idBerita";
    $sql = mysqli_query($conn, $queryUpdate);
}

// Redirect ke halaman form tambah berita setelah perubahan
header('location: Berita.php');
exit;
?>
