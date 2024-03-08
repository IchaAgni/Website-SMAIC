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
$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
$hasil = mysqli_fetch_array($query);

$id = $_POST['id'];
$a = $_POST['judul'];
$b = $_POST['tgl'];
$c = $_POST['detail'];

// Perbarui berita jika ada file yang diunggah
if(isset($_FILES['image'])){
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.', $file_name)));
    
    $extensions = array("jpeg","jpg","png");
    
    if(in_array($file_ext, $extensions) === false){
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
        $errors[] = 'File size must be excately 2 MB';
    }
    
    if(empty($errors)){
       // Pindahkan file yang diunggah ke direktori yang ditentukan
        move_uploaded_file($file_tmp, "../foto/berita/" . $file_name);
        echo "Success";

       // Perbarui data berita dengan nama file baru
        $sql = mysqli_query($conn, "UPDATE berita SET judul = '$a', tgl = '$b', foto = '$file_name', detail = '$c' WHERE id=$id");
    } else {
        print_r($errors);
    }
} else {
    // Jika tidak ada file yang diunggah, perbarui data berita tanpa mengubah gambar
    $sql = mysqli_query($conn, "UPDATE berita SET judul = '$a', tgl = '$b', detail = '$c' WHERE id=$id");
}

// Redirect ke halaman sejarah setelah perubahan
header('location: form_tmbh_berita.php');
?>
