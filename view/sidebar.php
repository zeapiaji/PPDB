<!-- 
+---------| Warning |---------+
| Sidebar ini hanya digunakan |
| untuk halaman page berita.  |
+-----------------------------+
 -->
<<<<<<< HEAD
<?php include 'berita/koneksi.php';

$query = "SELECT * FROM `berita` ORDER BY `pengunjung` DESC";

$hasil = mysqli_query($koneksi, $query);

// Convert mysqli_result -> PHP Array
$rows =[];
while($row = mysqli_fetch_array($hasil)){
  $rows[]=$row;
}

$no = 1;

 ?>

  <div class="position-sticky" style="top: 5rem;">
    <div class="p-4 mb-3 bg-light rounded">
      <h4 class="fst-italic">Halaman Berita</h4>
        <p class="mb-0">Menampilkan informasi-informasi terkini di SMKS Mahaputra Cerdas Utama secara Up To Date.</p>
    </div>

  <div class="container-fluid bg-light rounded">
    <div class="py-3">
      <h4 class="fst-italic">Terpopuler</h4>
        <?php foreach (array_slice($rows,0,10) as $key):?>
          <a href="master-detail-berita.php?id=<?php echo $key['id_berita'] ?>" class="link-dark">  
            <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-2"><h1><center><?php echo $no++; ?></center></h1></div>
                  <div class="col-10">
                    <h6 class="card-title text-truncate"><strong><?php echo $key['judul'] ?> </strong></h6>
                    <div class="card-text text-muted mt-3" style="font-size:13px;">Dibaca sebanyak <?php echo $key['pengunjung']; ?> kali</div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <hr>
        <?php endforeach ?>
    </div>
  </div> 
=======

  <div class="position-sticky" style="top: 5rem;">
    <div class="p-4 mb-3 bg-light rounded">
      <h4 class="fst-italic">Tentang halaman ini</h4>
        <p class="mb-0">Halaman konten ini didapat dari kerja sama antara para siswa dan tim PPDB, halaman berita ini juga ditulis oleh siswa dan dipublikasikan oleh Admin tim PPDB.</p>
    </div>

    <div class="p-4">
      <h4 class="fst-italic">Archives</h4>
      <ol class="list-unstyled mb-0">
        <li><a href="#">March 2021</a></li>
        <li><a href="#">February 2021</a></li>
        <li><a href="#">January 2021</a></li>
        <li><a href="#">December 2020</a></li>
        <li><a href="#">November 2020</a></li>
        <li><a href="#">October 2020</a></li>
        <li><a href="#">September 2020</a></li>
        <li><a href="#">August 2020</a></li>
        <li><a href="#">July 2020</a></li>
        <li><a href="#">June 2020</a></li>
        <li><a href="#">May 2020</a></li>
        <li><a href="#">April 2020</a></li>
      </ol>
    </div>
>>>>>>> 9b0524b10c4a6dff1763628e3db190c78bf489d8

    <div class="p-4">
      <h4 class="fst-italic">Ditempat lain</h4>
      <ol class="list-unstyled">
        <li><a href="https://www.instagram.com/smkmahaputracerdasutama/?hl=id" class="instagram"><i class="bx bxl-instagram"></i> Instagram</a></li>
        <li><a href="https://www.facebook.com/smkmahaputra/" class="facebook"><i class="bx bxl-facebook"></i> Facebook</a></li>
        <li><a href="https://www.youtube.com/channel/UCCfYqV-2N44pFhsQpGEedCw" class="youtube"><i class="bx bxl-youtube"></i> You Tube</a></li>
      </ol>
    </div>
  </div>