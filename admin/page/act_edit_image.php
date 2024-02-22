<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:../index.php');
} else {
    $username = $_SESSION['admin'];
}

require_once("../config/koneksi.php");
$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
$hasil = mysqli_fetch_array($query);

$que = mysqli_query($conn, "SELECT * FROM admin ");
$hasi = mysqli_fetch_array($que);



$id = $_POST['id'];
$a = $_POST['urutan'];
$b = $_POST['judul'];

if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"../foto/image_slider/".$file_name);
       echo "Success";
    }else{
       print_r($errors);
    }
 }

$sql = mysqli_query($conn, "UPDATE image_slider SET urutan = '$a', judul = '$b', foto = '$file_name'  WHERE id=$id");
header('location:image_slider.php');
