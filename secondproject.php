<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <title>PWPB</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <a class="navbar-brand" href="#" >REKAYASA PERANGKAT LUNAK</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
                  <div class="container">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="Firstproject.php">First Project<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link active" href="Secondproject.php">Second Project</a>
                        <a class="nav-item nav-link" href="Thirdproject.php">Third Project</a>
                        <a class="nav-item nav-link" href="#">Fourth Project</a>
                      </div>
                    </div>
                  </div>
        </nav>
        <div class="jumbotron">
      <div class="container">
        <center>
      <h1 class="display-4">BANGUN RUANG</h1>
        <p class="lead"></p>
       </center>
        <hr class="my-4">
      <br>
       <!-- BANGUN RUANG -->
        <div class="container">
    <br>
    <br>
    <center>
    <div class="row">
      <div class="col-md-4">
        <p>
          <?php
              const nama_kubus = "<h3>KUBUS</h3>";
              const LUAS_KUBUS = " 6 Sisi x Rusuk x Rusuk";
              const VOLUME_KUBUS = " Rusuk x Rusuk x Rusuk";
              echo "<img src = 'img/kubus.gif' width= '300px'>";
              echo nama_kubus;
              echo "<br>Rumus Luas :".LUAS_KUBUS;
              echo "<br>Rumus Volume :".VOLUME_KUBUS;
             ?> </p>
      </div>
      <div class="col-md-4">
        <p> 
          <?php
              const nama_balok = "<h3>BALOK</h3>";
              const LUAS_BALOK = " 2pl + 2pt + 2lt ";
              const VOLUME_BALOK = " Luas Alas x Tinggi";
              echo "<img src = 'img/balok.gif' width= '300px'>";
              echo nama_balok;
              echo "Rumus Luas :".LUAS_BALOK;
              echo "<br>Rumus Volume :".VOLUME_BALOK;
             ?> </p>   
        </p>
      </div>
      <div class="col-md-4">
        <p>
          <?php
              const nama_tabung = "<h3>TABUNG</h3>";
              const LUAS_TABUNG = " 2πr(r+t) ";
              const LUAS_TANPA_TUTUP = " πr² + 2πrt";
              const VOLUME_TABUNG = " Luas Alas x Tinggi";
              echo "<img src = 'img/tabung.gif' width= '300px'>";
              echo nama_tabung;
              echo "Rumus Luas :".LUAS_TABUNG;
              echo "<br>Rumus Luas Tanpa Tutup :".LUAS_TANPA_TUTUP;
              echo "<br>Rumus Volume :".VOLUME_TABUNG;
             ?> </p>
        </p>
      </div>
    </div>
    <br>
        <div class="row">
      <div class="col-md-4">
        <p>
          <?php
              const nama_limas = "<h3>LIMAS</h3>";
              const LUAS_LIMAS = " Luas Alas + Luas Semua Sisi Tegak";
              const VOLUME_LIMAS = " 1/3 x Luas Alas x Tinggi ";
              echo "<img src = 'img/limas.gif' width= '300px'>";
              echo nama_limas;
              echo "Rumus Luas :".LUAS_LIMAS;
              echo "<br>Rumus Volume :".VOLUME_LIMAS;
             ?> </p>
      </div>
      <div class="col-md-4">
        <p> 
          <?php
              const nama_prisma = "<h3>PRISMA SEGITIGA</h3>";
              const LUAS_PRISMA = " (S1+S2+S3) x tinggi";
              const VOLUME_PRISMA  = " Luas Alas x Tinggi";
              echo "<img src = 'img/prisma.gif' width= '300px'>";
              echo nama_prisma;
              echo "Rumus Luas :".LUAS_PRISMA ;
              echo "<br>Rumus Volume :".VOLUME_PRISMA ;
             ?> </p>   
        </p>
      </div>
      <div class="col-md-4">
        <p>
          <?php
              const nama_kerucut = "<h3>KERUCUT</h3>";
              const LUAS_KERUCUT = "  (π x r2 )+  (π x r x s ) ";
              const VOLUME_KERUCUT = " 1/3 x π x r2 x t ";
              echo "<img src = 'img/kerucut.gif' width= '300px'>";
              echo nama_kerucut;
              echo "Rumus Luas :".LUAS_KERUCUT;
              echo "<br>Rumus Volume :".VOLUME_KERUCUT;
             ?> </p>
        </p>
      </div>
    </div>
    </center>
  </div>
     </div>
        <hr class="my-4">
          <center><a class="btn btn-primary btn-lg" href="#" role="button">Lihat Selengkapnya</a></center>
        </div>
             <!--PENUTUP MEMBERS-->
  <footer class="container">
    <p class="float-right"><a href="index.php">Back to Home</a></p>
    <center><p>&copy;2019 Company</p></center>
  </footer>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      </body>
      </html>