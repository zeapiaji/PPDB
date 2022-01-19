<?php 
include '../koneksi.php';

// Berita
    $id = $_GET['id'];
// /.Berita

// Hapus SQL
    $query          = "DELETE FROM `berita` WHERE `id_berita` = $id";
    $upload         = mysqli_query($koneksi,$query);
// /.Hapus SQL

header('location: ../../master-berita.php');

?>