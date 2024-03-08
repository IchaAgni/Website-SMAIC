<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:../index.php');
    exit; // Penting untuk menghentikan eksekusi setelah melakukan redirect
} else {
    $username = $_SESSION['admin'];
}

require_once("../config/koneksi.php");
$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
$hasil = mysqli_fetch_array($query);

$id = $_POST['id'];
$a = $_POST['judul'];
$b = $_POST['tgl'];
$c = $_POST['detail'];

// Mengecek apakah ada file yang diunggah
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, plesase choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"../foto/berita/".$file_name);
       echo "Success";
    }else{
       print_r($errors);
    }
    // Hanya melakukan update gambar jika tidak ada error
    if(empty($errors)){
        $sql = mysqli_query($conn, "UPDATE berita SET judul = '$a', tgl = '$b', foto = '$file_name', detail = '$c'  WHERE id=$id");
    } else {
        $sql = mysqli_query($conn, "UPDATE berita SET judul = '$a', tgl = '$b', detail = '$c'  WHERE id=$id");
    }
} else {
    // Jika tidak ada file diunggah, gunakan gambar sebelumnya
    $sql = mysqli_query($conn, "UPDATE berita SET judul = '$a', tgl = '$b', detail = '$c'  WHERE id=$id");
}

header('location:berita.php');
?>