<!-- 
+---------| Warning |---------+
| Sidebar ini hanya digunakan |
| untuk halaman page berita.  |
+-----------------------------+
 -->
<?php include 'berita/koneksi.php';

$query = "SELECT * FROM `berita` ORDER BY `pengunjung` DESC";

$hasil = mysqli_query($koneksi, $query);

// Convert mysqli_result -> PHP Array
$rows =[];
while($row = mysqli_fetch_array($hasil)){
  $rows[] = $row;
}

$no = 1;

 ?>

  <div class="position-sticky" style="top: 5rem;">
    <div class="p-4 mb-3 bg-light rounded">
      <h4 class="fst-italic">Halaman Berita</h4>
        <p class="mb-0">Menampilkan informasi-informasi terkini di SMKS Mahaputra Cerdas Utama secara Up To Date.</p>
        <a href="master-login.php">Login Disini</a>
        <a href="auth/logout.php">Logout</a>
    </div>

  <div class="container-fluid bg-light rounded">
    <div class="py-3">
      <h4 class="fst-italic">Terpopuler</h4>
        <?php foreach (array_slice($rows,0,10) as $key):?>
          <a href="master-detail-berita.php?id=<?php echo $key['id_berita'] ?>" class="link-dark">  
            <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-4"><h1><center><?php echo $no++; ?></center></h1></div>
                  <div class="col-8">
                    <h6 class="card-title col-12 konten-sidebar"><strong><?php echo $key['judul'] ?> </strong></h6>
                  </div>
                </div>
              </div>
            </div>
          </a>
        <?php endforeach ?>
    </div>
  </div> 

    <div class="p-4">
      <h4 class="fst-italic">Ditempat lain</h4>
      <ol class="list-unstyled">
        <li><a href="https://www.instagram.com/smkmahaputracerdasutama/?hl=id" class="instagram"><i class="bx bxl-instagram"></i> Instagram</a></li>
        <li><a href="https://www.facebook.com/smkmahaputra/" class="facebook"><i class="bx bxl-facebook"></i> Facebook</a></li>
        <li><a href="https://www.youtube.com/channel/UCCfYqV-2N44pFhsQpGEedCw" class="youtube"><i class="bx bxl-youtube"></i> You Tube</a></li>
      </ol>
    </div>
  </div>