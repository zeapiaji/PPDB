<?php

$koneksi_login = mysqli_connect("localhost","root","","berita");

if ($koneksi_login){
    echo "berhasil";
}

?>