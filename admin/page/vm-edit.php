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
$a = $_POST['visi'];
$b = $_POST['misi'];
$c = $_POST['tujuan'];
$d = $_POST['budaya'];

$sql = mysqli_query($conn, "UPDATE visimisi SET visi = '$a', misi='$b', tujuan = '$c', budaya = '$d' WHERE id=$id");
header('location:index.php');
