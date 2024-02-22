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
$a = $_POST['nm_user'];
$b = $_POST['username'];
$c = $_POST['password'];
$d = $_POST['level'];

$sql = mysqli_query($conn, "UPDATE admin SET nm_user = '$a', username='$b' , password='$c', level='$d' WHERE id=$id");
header('location:admin.php');
