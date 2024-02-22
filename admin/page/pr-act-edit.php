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
$a = $_POST['prestasi'];
$b = $_POST['detail'];
$c = $_POST['tgl'];


$sql = mysqli_query($conn, "UPDATE prestasi SET prestasi = '$a' , detail = '$b', tgl = '$c' WHERE id=$id");
header('location:prestasi.php');
