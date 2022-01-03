<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<div class="container p-5">
   <div class="card"> 
  <div class="row g-0">
    <div class="col-md-4">
      <div class="container bg-light" style="height:350;">
      <table style="height: 350;">
          <tr>
              <td class="align-middle p-4">
                <form action="proses-berita.php" method="POST">
                <label class="form-label" for="inputGambar">Masukan Gambar</label>
                <input class="form-control" name="gambar" id="inputGambar" type="file">
              </td>
          </tr>
      </table>
        
      </div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
            <input type="text" class="form-control" name="judul" placeholder="Masukan Judul">
        </h5>
        <p class="card-text">
            <textarea class="form-control" name="konten" rows="10" placeholder="Masukan Berita/Konten"></textarea>
        </p>
        <button type="submit" class="btn btn-md btn-primary">Kirim Berita</button>
        </form>
      </div>
    </div>
    </div>
    </div>
</div>      