<!DOCTYPE html>
<html lang="en">
<body>
  <form action="berita/controller/proses-berita.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
    <div class="container p-5">
      <div class="card"> 
        <div class="row g-0">
          <div class="col-md-4">
            <div class="container bg-light" style="height:350;">
              <table style="height: 350;">
                <tr>
                  <td class="align-middle p-5">
                    <label class="form-label" for="inputGambar">Gambar</label>
                    <input class="form-control" name="gambar" id="inputGambar" type="file" required>
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
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukan Judul" required>
                <div class="invalid-feedback">
                  Masukan Judul untuk Berita
                </div>
              </div>
              <div class="card-title mt-3">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" style="max-width: 200px ;" name="tanggal" id="tanggal" placeholder="Masukan Tanggal" required>
                <div class="invalid-feedback">
                  Masukan Tanggal untuk Berita
                </div>
              </div>
              <p class="card-text mt-4">
                <label for="konten">Konten</label>
                <textarea class="form-control" name="konten" id="konten" rows="9" placeholder="Masukan Berita/Konten" required></textarea>
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