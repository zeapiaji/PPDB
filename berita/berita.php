<?php include 'koneksi.php';

$query = "SELECT * FROM berita";

$hasil = mysqli_query($koneksi, $query);

?>

<?php foreach ($hasil as $key): ?>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../assets/img/?php echo $key['gambar']?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $key['judul']?></h5>
        <p class="card-text"><?php echo $key['konten']?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>
