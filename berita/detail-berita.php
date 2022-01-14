<?php 

include 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM `berita` WHERE `id_berita` = $id";

$hasil = mysqli_query($koneksi, $query);

$fetchHasil = mysqli_fetch_assoc($hasil);

$tanggal = date('d F Y', strtotime($fetchHasil['tanggal']));

?>

<?php include 'view/header.php'; ?>
<?php include 'view/navbar.php'; ?>

<main class="container" style="margin-top: 6rem;">
  <div class="row g-5">
      <div class="col-md-8">

        <article class="blog-post">
          <h1 class="blog-post-title"><?php echo $fetchHasil['judul'] ?></h1>
          <p class="blog-post-meta"><div style="font-size: 2vh;">SMK MAHAPUTRA -<?php echo $tanggal ?></a></div></p>

          <img src="assets/img/berita/<?php echo $fetchHasil['gambar']?>" style="width: 90rem; height: auto;" class="img-fluid">

          <hr>
          <p>Penulis : Zea Pioji</p>
          <p style="white-space: pre-line;"><?php echo $fetchHasil['konten']; ?></p>
        </article>  
         

      </div>

      <!-- Sidebar -->
      <?php include 'view/sidebar.php'; ?>

    </div>