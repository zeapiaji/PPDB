<?php 

include 'koneksi.php';

$id = $_GET['id'];


// Counter Pengunjung
$query              = "SELECT * FROM `berita` WHERE `id_berita` = $id";
$hasil              = mysqli_query($koneksi, $query);
$fetchHasil         = mysqli_fetch_assoc($hasil);

  // Update Pengunjung (Tambah 1 setiap user membaca detail berita)
  $pengunjung       = $fetchHasil['pengunjung'];
  $updatePengunjung = $pengunjung + 1;
  $query            = "UPDATE `berita` SET `pengunjung`='$updatePengunjung' WHERE `id_berita` = $id";
  mysqli_query($koneksi, $query);
  // /.Update Pengunjung

// /.Counter Pengunjung



// Ambil Data
  $query            = "SELECT * FROM `berita` WHERE `id_berita` = $id";

  $hasil            = mysqli_query($koneksi, $query);

  $fetchHasil       = mysqli_fetch_assoc($hasil);
// /.Ambil Data



// Format Tanggal 
$tanggal = date('d F Y', strtotime($fetchHasil['tanggal']));
// /.Format Tanggal

?>

<?php include 'view/header.php'; ?>
<?php include 'view/navbar.php'; ?>

<main class="container" style="margin-top: 6rem;">
  <div class="row g-5">
      <div class="col-md-8">
        <article class="blog-post">
          <div class="mb-4">
            <div class="blog-post-title col-12 mb-3"><h3 class="fw-bolder"><?php echo $fetchHasil['judul'] ?></h3></div>
            <div class="row">
              <div class="col-3"><div class="blog-post-meta"><i class="bi bi-clock"></i> <?php echo $tanggal ?></div></div>
              <div class="col-9 text-start"><i class="bi bi-eye"></i> <?php echo $fetchHasil['pengunjung']; ?></div>
            </div>
          </div>  
          <img src="assets/img/berita/<?php echo $fetchHasil['gambar']?>" style="width: 90rem; height: auto;" class="img-fluid">
          <hr>
          <p style="white-space: pre-line;"><?php echo $fetchHasil['konten']; ?></p>

        </article>
      </div>
      <div class="col-4">
      <!-- Sidebar -->
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
