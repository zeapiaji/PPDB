<?php 
include '../koneksi.php';



// Berita
    $id             = $_POST['id'];
    $judul          = $_POST['judul'];
    $konten         = $_POST['konten'];
    $tanggal        = $_POST['tanggal'];

// Gambar
    $x=$_POST['ambilGambar'];
    $foto           = $_FILES['gambar']['tmp_name'];
    $foto_name      = $_FILES['gambar']['name'];
    $acak           = rand(1,99);
    $tujuan_foto    = $acak.$foto_name;
    $tempat_foto    = '../../assets/img/berita/'.$tujuan_foto;
// /.Gambar

// Upload ke SQL
    $query          = "UPDATE `berita` SET `judul`='$judul',`gambar`='$tujuan_foto',`tanggal`='$tanggal',`konten`='$konten' WHERE `id_berita` = $id";
    $upload         = mysqli_query($koneksi,$query);
// /.Upload ke SQL

// Update foto
    $buat_foto      = $tujuan_foto;
    $d              = '../../assets/img/berita/'.$x;
    @unlink ("$d");
    copy ($foto,$tempat_foto);
// /.Update foto

header('location: ../../master-berita.php');

?>