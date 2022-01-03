<?php 
include 'koneksi.php';

$gambar = $_POST['gambar'];
$judul = $_POST['judul'];
$konten = $_POST['konten'];

$query = "INSERT INTO berita VALUES ('','$judul','$gambar','$konten')";

$upload = mysqli_query($koneksi,$query);

header('location: ../index.php');


?>