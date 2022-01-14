<!DOCTYPE html>
<html lang="en">

<?php include 'berita/koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM `berita` WHERE id_berita = $id";

$hasil = mysqli_query($koneksi, $query);

$fetchHasil = mysqli_fetch_assoc($hasil);
?>

<body>
  <form action="berita/controller/proses-edit-berita.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
    <div class="container p-5">
      <div class="card"> 
        <div class="row g-0">
          <div class="col-md-4">
            <div class="container bg-light" style="height:350;">
              <table style="height: 350;">
                <tr>
                  <td class="align-middle p-5">
                    <label class="form-label" for="inputGambar">Gambar</label>
                    <input class="form-control" name="gambar" id="inputGambar" type="file">
                    <input class="form-control" name="ambilGambar" value="<?php echo $fetchHasil['gambar']?>" type="hidden">
                    <div class="invalid-feedback">
                      Masukan Gambar untuk Berita
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card-body p-4">
              <div class="card-title">
                <input type="text" class="form-control" value="<?php echo $fetchHasil['id_berita']?>" name="id" id="judul" placeholder="Masukan Judul" hidden required>
                <label for="judul">Judul</label>
                <input type="text" class="form-control" value="<?php echo $fetchHasil['judul']?>" name="judul" id="judul" placeholder="Masukan Judul" required>
                <div class="invalid-feedback">
                  Masukan Judul untuk Berita
                </div>
              </div>
              <div class="card-title mt-3">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" style="max-width: 200px ;" value="<?php echo $fetchHasil['tanggal']?>" name="tanggal" id="tanggal" placeholder="Masukan Tanggal" required>
                <div class="invalid-feedback">
                  Masukan Tanggal untuk Berita
                </div>
              </div>
              <p class="card-text mt-4">
                <label for="konten">Konten</label>
                <textarea class="form-control" name="konten" id="konten" rows="9" placeholder="Masukan Berita/Konten" required><?php echo $fetchHasil['konten']?></textarea>
                <div class="invalid-feedback">
                  Masukan Konten untuk Berita
                </div>
              </p>
                <input type="submit" class="btn btn-lg btn-primary" value="Tambahkan Berita">
            </div>
          </div>
          </div>
        </div>
    </div>  
  </form>

<!-- Bootstrap Validation -->
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

</script>
<!-- /. Boostrap Validation -->

</body>
</html>