<?php 
include '../koneksi.php';

// Berita
    $judul          = $_POST['judul'];
    $konten         = $_POST['konten'];
    $tanggal        = $_POST['tanggal'];
// /.Berita

// Gambar
    $lokasi_file    = $_FILES['gambar']['tmp_name'];
    $nama_file      = $_FILES['gambar']['name'];
    $acak           = rand(1,99);
    $nama_file_unik = $acak.$nama_file;
    $vdir_upload    = "../../assets/img/berita/";
    $vfile_upload   = $vdir_upload . $nama_file_unik;
// /.Gambar

// Upload ke SQL
    $query          = "INSERT INTO berita VALUES ('','$judul','$nama_file_unik','$tanggal','$konten')";
    $upload         = mysqli_query($koneksi,$query);
// /.Upload ke SQL

// Upload gambar ke folder lokal
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $vfile_upload);
// /.Upload gambar ke folder lokal

header('location: ../../master-berita.php');

?>