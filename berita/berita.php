<?php 

include 'koneksi.php';

$query = "SELECT * FROM `berita` ORDER BY `id_berita` DESC";

$hasil = mysqli_query($koneksi, $query);

// Hanya dipakai untuk Hero
$queryHero = "SELECT * FROM `berita` ORDER BY `pengunjung` DESC";

$data = mysqli_query($koneksi, $queryHero);

$hero = mysqli_fetch_assoc($data); 

?>

<!doctype html>
<html lang="en">
  <!-- Bootstrap core CSS -->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  
<body>
    
<div class="container-fluid">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <?php include 'view/header.php'; ?>
      <?php include 'view/navbar.php'; ?>
    </div>
  </header>
</div>
  
  <div class="container-fluid p-4 p-md-5 mb-4 text-white bg-dark mt-4" style="max-height: 390px;">
    <div class="row">
      
      <div class="col-lg-5 col-md-5 col-sm-12 px-0">
        <a href="master-detail-berita.php?id=<?php echo $hero['id_berita']?>" class="link-light">
          <h1 class="display-4 fst-italic">Headline</h1>
          <p class="lead my-3 konten"><?php echo $hero['konten']?></p>
        </a>  
      </div>

      <!-- Divider/spacer -->
      <div class="col-lg-2 col-md-2 col-sm-12"><br></div>
      <!-- /.Divider -->

      <div class="col-lg-5 col-md-5 col-sm-12 px-0 text-center">
        <a href="master-detail-berita.php?id=<?php echo $hero['id_berita']?>">
          <img src="assets/img/berita/<?php echo $hero['gambar']?>" style="height:300px; width: 500px;" class="img-fluid rounded"  alt="">
        </a>
      </div>
      
    </div>
  </div>

<main class="container mt-5">
  <div class="row mb-2">
    <div class="col-lg-9 col-md-8 col-sm-12">
      <div class="row">
        <?php foreach ($hasil as $key): 
          // Format Tanggal
          $tanggal = date('d F Y', strtotime($key['tanggal']));
        ?>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="card mb-3" style="height: 460px;">
            <a href="master-detail-berita.php?id=<?php echo $key['id_berita'] ?>" class="link-dark">
              <img src="assets/img/berita/<?php echo $key['gambar'] ?>" class="card-img-top" style="height: 225px;" alt="gambar-<?php echo $key['id_berita'] ?>">
              <div class="card-body">
                <h5 class="card-title col-12 konten-judul" style="min-height: 25px; max-height: 50px;"><strong><?php echo $key['judul'] ?></strong></h5>
                <h6 class="card-text text-muted"><?php echo $tanggal ?></h6>
                <?php if (isset($_SESSION['username'])): ?>
                  <a href="master-tambah-berita.php">Tambah Berita</a>
                <?php endif?>
                <hr>
                <p class="card-text konten-berita col-12" style="height: 75px;"><?php echo $key['konten']; ?></p>
              </div>
            </a>
          </div>
         </div> 
        <?php endforeach ?>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
      
      <?php include 'view/sidebar.php'; ?>
    </div>
  </div>
</main>

<footer class="blog-footer mt-5">
  <div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>SMK MAHAPUTRA CERDAS UTAMA</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="https://www.instagram.com/smkmahaputracerdasutama/?hl=id" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="https://www.facebook.com/smkmahaputra/" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="https://www.youtube.com/channel/UCCfYqV-2N44pFhsQpGEedCw" class="youtube"><i class="bx bxl-youtube"></i></a>
  </div>
</div>
</footer>


    
  </body>
</html>

