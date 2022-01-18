<?php 

include 'koneksi.php';

<<<<<<< HEAD
$query = "SELECT * FROM `berita` ORDER BY `id_berita` DESC";

$hasil = mysqli_query($koneksi, $query);

// Hanya dipakai untuk Hero
$queryHero = "SELECT * FROM `berita` ORDER BY `pengunjung` DESC";

$data = mysqli_query($koneksi, $queryHero);

$hero = mysqli_fetch_assoc($data); 
=======
$query = "SELECT * FROM `berita`";

$hasil = mysqli_query($koneksi, $query);

>>>>>>> 9b0524b10c4a6dff1763628e3db190c78bf489d8

?>

<!doctype html>
<html lang="en">
  <!-- Bootstrap core CSS -->
<<<<<<< HEAD
=======

>>>>>>> 9b0524b10c4a6dff1763628e3db190c78bf489d8
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
<<<<<<< HEAD
  
  <div class="container-fluid p-4 p-md-5 mb-4 text-white bg-dark mt-4" style="max-height: 390px;">
    <div class="row">
    <div class="col-lg-5 col-md-5 col-sm-12 px-0">
      <h1 class="display-4 fst-italic">Headline</h1>
      <p class="lead my-3 konten"><?php echo $hero['konten']?></p>
    </div>

    <!-- Divider/spacer -->
    <div class="col-lg-2 col-md-2 col-sm-12"><br></div>
    <!-- /.Divider -->

    <div class="col-lg-5 col-md-5 col-sm-12 px-0 text-center">
      <img src="assets/img/berita/<?php echo $hero['gambar']?>" style="height:300px; width: 500px;" class="img-fluid rounded"  alt="">
    </div>
    </div>
  </div>

<main class="container mt-5">
  <div class="row mb-2">
    <div class="col-lg-9 col-md-8 col-sm-12">
      <div class="row">
=======

<main class="container-fluid mt-5">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Halaman Berita SMKS MAHAPUTRA CERDAS UTAMA</h1>
      <p class="lead my-3">Halaman berita, menampilkan informasi-informasi SMKS Mahaputra secara Up To Date.</p>
      <a href="master-tambah-berita.php">Tambah Berita</a>
    </div>
  </div>
      

  <div class="row mb-2">
<<<<<<< HEAD
    <?php foreach ($hasil as $key): ?>
      <div class="col-md-4">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="max-height: 250px;">
          <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0"><?php echo $key['judul']; ?></h3>
            <div class="mb-2 text-muted"><?php 
            $tanggal = date('d F Y', strtotime($key['tanggal']));
            echo $tanggal?></div>
            <p class="card-text mb-auto">Konten Disini</p>
            <a href="master-detail-berita.php?id=<?php echo $key['id_berita'] ?>">Continue reading</a>
            <a href="master-edit-berita.php?id=<?php echo $key['id_berita'] ?>">Edit Berita</a>
            <a href="berita/controller/proses-hapus-berita.php?id=<?php echo $key['id_berita'] ?>">Hapus Berita</a>
          </div>
          <div class="col-auto d-none d-lg-block p-1">
           <img src="assets/img/berita/<?php echo $key['gambar']?>" style="height: 213px;" alt="">
=======
    <div class="col-8">
      <div class="row">

>>>>>>> 9b0524b10c4a6dff1763628e3db190c78bf489d8
        <?php foreach ($hasil as $key): 
          // Format Tanggal
          $tanggal = date('d F Y', strtotime($key['tanggal']));
        ?>
<<<<<<< HEAD
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="card mb-3" style="min-height:430px;">
            <img src="assets/img/berita/<?php echo $key['gambar'] ?>" class="card-img-top" style="height: 225px;" alt="gambar-<?php echo $key['id_berita'] ?>">
            <div class="card-body">
              <h5 class="card-title text-truncate"><strong><?php echo $key['judul'] ?></strong></h5>
              <h6 class="card-text text-muted"><?php echo $tanggal ?></h6>
              <p class="card-text konten-berita col-12" style="height:75px;"><?php echo $key['konten']; ?></p>
            <div class="card-footer">
              <a href="master-detail-berita.php?id=<?php echo $key['id_berita'] ?>">Baca</a>
            </div>
            </div>
=======
        <div class="col-6">
          <div class="card mb-3">
            <img src="assets/img/berita/<?php echo $key['gambar'] ?>" class="card-img-top" alt="gambar-<?php echo $key['id_berita'] ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $key['judul'] ?></h5>
              <h5 class="card-text text-muted"><?php echo $tanggal ?></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
>>>>>>> 0138a7e36fb2c56b559b491fd9c8957a885d66ee
>>>>>>> 9b0524b10c4a6dff1763628e3db190c78bf489d8
          </div>
         </div> 
        <?php endforeach ?>
      </div>
    </div>
<<<<<<< HEAD
    <div class="col-lg-3 col-md-4 col-sm-12">
      <?php include 'view/sidebar.php'; ?>
    </div>
  </div>
=======
    <div class="col-4">
      <?php include 'view/sidebar.php'; ?>
    </div>
  </div>

  <div class="row g-5">
    <!-- <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        From the Firehose
      </h3>

      <article class="blog-post">
        <h2 class="blog-post-title">Sample blog post</h2>
        <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
        <hr>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h2>Blockquotes</h2>
        <p>This is an example blockquote in action:</p>
        <blockquote class="blockquote">
          <p>Quoted text goes here.</p>
        </blockquote>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h3>Example lists</h3>
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list:</p>
        <ul>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ul>
        <p>And this is an ordered list:</p>
        <ol>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ol>
        <p>And this is a definition list:</p>
        <dl>
          <dt>HyperText Markup Language (HTML)</dt>
          <dd>The language used to describe and define the content of a Web page</dd>
          <dt>Cascading Style Sheets (CSS)</dt>
          <dd>Used to describe the appearance of Web content</dd>
          <dt>JavaScript (JS)</dt>
          <dd>The programming language used to build advanced Web sites and applications</dd>
        </dl>
        <h2>Inline HTML elements</h2>
        <p>HTML defines a long list of available inline tags, a complete list of which can be found on the <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer Network</a>.</p>
        <ul>
          <li><strong>To bold text</strong>, use <code class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.</li>
          <li><em>To italicize text</em>, use <code class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.</li>
          <li>Abbreviations, like <abbr title="HyperText Markup Langage">HTML</abbr> should use <code class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional <code class="language-plaintext highlighter-rouge">title</code> attribute for the full phrase.</li>
          <li>Citations, like <cite>— Mark Otto</cite>, should use <code class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.</li>
          <li><del>Deleted</del> text should use <code class="language-plaintext highlighter-rouge">&lt;del&gt;</code> and <ins>inserted</ins> text should use <code class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.</li>
          <li>Superscript <sup>text</sup> uses <code class="language-plaintext highlighter-rouge">&lt;sup&gt;</code> and subscript <sub>text</sub> uses <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.</li>
        </ul>
        <p>Most of these elements are styled by browsers with few modifications on our part.</p>
        <h2>Heading</h2>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h3>Sub-heading</h3>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <pre><code>Example code block</code></pre>
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>

      <article class="blog-post">
        <h2 class="blog-post-title">Another blog post</h2>
        <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <blockquote>
          <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
        </blockquote>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h3>Example table</h3>
        <p>And don't forget about tables in these posts:</p>
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Upvotes</th>
              <th>Downvotes</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Alice</td>
              <td>10</td>
              <td>11</td>
            </tr>
            <tr>
              <td>Bob</td>
              <td>4</td>
              <td>3</td>
            </tr>
            <tr>
              <td>Charlie</td>
              <td>7</td>
              <td>9</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>Totals</td>
              <td>21</td>
              <td>23</td>
            </tr>
          </tfoot>
        </table>

        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>

      <article class="blog-post">
        <h2 class="blog-post-title">New feature</h2>
        <p class="blog-post-meta">December 14, 2020 by <a href="#">Chris</a></p>

        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <ul>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ul>
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>

      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled">Newer</a>
      </nav>

    </div> -->
    
    <!-- Sidebar -->
    

  </div>

>>>>>>> 9b0524b10c4a6dff1763628e3db190c78bf489d8
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

