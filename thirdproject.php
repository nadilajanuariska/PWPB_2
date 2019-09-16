<!DOCTYPE html>
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
      <h1 class="display-4">DATA IDENTITAS PESERTA DIDIK BARU <br>
      Tahun Ajaran 2019/2020</h1>
        <p class="lead"></p>
       </center>
        <hr class="my-4">
      <br>
      <!-- FORM -->
      <div class="container ">
  <form action="" method="post" name="form">
        <div class="form-group col-md-6">
          <label>Nama Lengkap</label>
          <input type="text" class="form-control" name="nl" placeholder="Masukkan nama lengkap">
        </div>
        <div class="form-group col-md-6">
          <label>Nama Panggilan</label>
          <input type="text" class="form-control" name="np" placeholder="Masukkan nama panggilan">
        </div>
        <div class="form-group col-md-6">
          <label>Jenis Kelamin</label><br>
          <input type="radio" name="jeniskelamin" value="lakilaki"  > Laki-laki 
          <input type="radio" name="jeniskelamin"s value="perempuan" > Perempuan 
        </div>
        <div class="form-group col-md-6">
          <label>NISN</label>
          <input type="text" class="form-control" name="nis" placeholder="Masukkan NISN">
        </div>
         <div class="form-group col-md-6">
          <label>NIK</label>
          <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK">
        </div>
        <div class="form-group col-md-6">
          <label>Tempat Tanggal Lahir</label><br>
          <input type="text"  name="ttl" placeholder="Tempat" ><input type="date" name="date">
        </div>
         <div class="form-group col-md-6">
          <label>Asal Sekolah</label>
          <input type="text" class="form-control" name="asal" placeholder="Asal Sekolah">
        </div>
         <div class="form-group col-md-6">
          <label>Nomor SKHUN</label>
          <input type="text" class="form-control" name="SKHUN" placeholder="Masukkan Nomor SKHUN">
        </div>
         <div class="form-group col-md-6">
          <label>Tanggal Diterima di Sekolah</label>
          <input type="text" class="form-control" name="Diterima" placeholder="Masukkan Tanggal">
        </div>
         <div class="form-group col-md-6">
          <label>Jika Pindahan Sebutkan Alasan Pindah Ke Sekolah Ini</label>
          <input type="text" class="form-control"  name="alasan" placeholder="Masukkan Alasan">
        </div>
        <div class="form-group col-md-6">
          <label>Agama</label><br>
          <input type="radio" name="agama" value="Islam">Islam
          <input type="radio" name="agama" value="kristen">Kristen
          <input type="radio" name="agama" value="Hindu">Hindu
          <input type="radio" name="agama" value="Buddha">Buddha
          <input type="radio" name="agama" value="Konghuchu">Konghuchu
        </div>
         <div class="form-group col-md-6">
          <label>Alamat</label>
          <input type="text" class="form-control" name="Alamat" placeholder="Masukkan Alamat Anda">
        </div>
         <div class="form-group col-md-6">
          <label>Tinggal Bersama</label><br>
          <input type="radio"  name="tinggal" value="orang tua">Orang tua
          <input type="radio" name="tinggal" value="saudara">Saudara
        </div>
         <div class="form-group col-md-6">
          <label>Transportasi Ke Sekolah</label><br>
          <input type="text" class="form-control" name="Transportasi" placeholder="Masukkan Transportasi Anda ke Sekolah">
        </div>
        <div class="form-group col-md-6">
          <label>Nomor Telepon</label>
          <input type="text" class="form-control" name="telepon" placeholder="Masukkan Nomor Telepon Anda">
        </div>
        <div class="form-group col-md-6">
          <label>Nomor HP</label>
          <input type="text" class="form-control" name="hp" placeholder="Masukkan Nomor HP Anda">
        </div>
        <div class="form-group col-md-6">
          <label>Nomor KPS (Kartu Perlindungan Sosial) bagi yang memiliki</label>
          <input type="text" class="form-control" name="kps" placeholder="Masukkan Nomor KPS Anda">
        </div>
        <div class="form-group col-md-6">
          <label><b><i>Data Ayah</i></b></label><br>
          <label>Nama</label>
            <input type="text" class="form-control" name="nama-ayah" placeholder="Masukkan Nama">
          <label>Tahun Lahir</label>
            <input type="text" class="form-control" name="tahun-lahir-ayah" placeholder="Masukkan Tahun Lahir">
          <label> Pendidikan</label>
            <input type="text" class="form-control" name="Pendidikan-ayah" placeholder="Masukkan Pendidikan Terakhir">
          <label> Pekerjaan</label>
            <input type="text" class="form-control" name="Pekerjaan-ayah" placeholder="Masukkan Pekerjaan">
          <label> Penghasilan Perbulan</label><br>
            <input type="radio" name="Penghasilan ayah" value="<Rp.500.000">< RP.500.000<br>
            <input type="radio" name="Penghasilan ayah" value="Rp.500.000 - Rp. 3.000.000">RP.500.000 - Rp. 3000.000<br>
            <input type="radio" name="Penghasilan ayah" value=">Rp. 3000.000">> RP.3000.000
        </div>
        <div class="form-group col-md-6">
          <label><b><i>Data Ibu</i></b></label><br>
          <label>Nama</label>
            <input type="text" class="form-control" name="nama Ibu" placeholder="Masukkan Nama">
          <label>Tahun Lahir</label>
            <input type="text" class="form-control" name="tahun lahir ibu" placeholder="Masukkan Tahun Lahir">
          <label> Pendidikan</label>
            <input type="text" class="form-control" name="Pendidikan ibu" placeholder="Masukkan Pendidikan Terakhir">
          <label> Pekerjaan</label>
            <input type="text" class="form-control" name="Pekerjaan ibu" placeholder="Masukkan Pekerjaan">
          <label> Penghasilan Perbulan</label><br>
            <input type="radio" name="Penghasilan ibu" value="<Rp.500.000">< RP.500.000<br>
            <input type="radio" name="Penghasilan ibu" value="Rp.500.000 - Rp. 3.000.000">RP.500.000 - Rp. 3000.000<br>
            <input type="radio" name="Penghasilan ibu" value=">Rp. 3000.000"> >RP.3000.000
        </div>
      <button type="submit" class="btn btn-primary" value="simpan" name="spn">Simpan</button>
       <button type="submit" class="btn btn-light" value="Reset" name="cncl">Reset</button>
          </form>
        </div>
      </div>
    </div>
    <?php
      //pemroses data inputan for
      if(isset($_POST['spn'])){
        $nama_lengkap =$_POST['nl'];
          echo "Nama Lengkap : $nama_lengkap<br>";
        $nama_panggilan=$_POST['np'];
          echo "Nama Panggilan : $nama_panggilan<br>";
        $jenis_kelamin=$_POST['jeniskelamin'];
         echo "Jenis Kelamin : $jenis_kelamin<br>";
        $NISN =$_POST['nis'];
         echo "NISN : $NISN<br>";
        $NIK =$_POST['nik'];
           echo "NIK : $NIK<br>";
        $Tempattanggallahir =$_POST['ttl']['date'];
           echo "Tempat Tanggal Lahir : $tempattanggallahir<br>";
        $asalSekolah =$_POST['asal'];
          echo "Asal Sekolah : $asalsekolah<br>";
        $nomorSKHUN =$_POST['SKHUN'];
           echo "Nomor SKHUN : $nomorSKHUN<br>";
        $tanggalDiterima =$_POST['Diterima'];
          echo "Tanggal Diterima : $tanggalDiterima<br>";
        $jikaPindahan =$_POST['alasan'];
           echo "Jika Pindahan Sebutkan Alasan Pindah Ke Sekolah Ini : $jikaPindahan<br>";
        $agama =$_POST['agama'];
           echo "Agama : $agama<br>";
        $tinggalbersama =$_POST ['tinggal'];
           echo "Tinggal Bersama : $tinggalbersama<br>";
        $transportasi = $_POST ['Transportasi'];
          echo "Transportasi : $transportasi<br>";
        $nomor_telpon =$_POST['telepon'];
           echo "Nomor Telpon : $nomor_telpon<br>";
        $nomor_hp =$_POST['hp'];
          echo "Nomor Hp : $nomor_hp<br>";
        $nomor_kps =$POST ['kps'];
          echo "Nomor Kps : $nomor_kps<br>";
        $nama_ayah =$_POST['nama ayah'];
          echo "Nama Ayah : $nama_ayah<br>";
        $tahun_lahir_ayah =$_POST['tahun lahir ayah'];
          echo "Tahun lahir ayah : $tahun_lahir_ayah<br>";
        $pendidikan_ayah =$_POST['Pendidikan ayah'];
          echo "Pendidikan ayah : $pendidikan_ayah<br>";
        $pekerjaan_ayah =$_POST['Pekerjaan ayah'];
          echo "Pekerjaan ayah : $pekerjaan_ayah<br>";
        $penghasilan_ayah=$_POST['Penghasilan ayah'];
          echo "Penghasilan ayah : $penghasilan_ayah<br>";
        $nama_ibu =$_POST['nama ibu'];
          echo "Nama ibu : $nama_ibu<br>";
        $tahun_lahir_ibu =$_POST['tahun lahir ibu'];
          echo "Tahun lahir ibu : $tahun_lahir_ibu<br>";
        $pendidikan_ibu =$_POST['Pendidikan ibu'];
          echo "Pendidikan ibu : $pendidikan_ibu<br>";
        $pekerjaan_ibu=$_POST['Pekerjaan ibu'];
          echo "Pekerjaan ibu : $pekerjaan_ibu<br>";
        $penghasilan_ibu=$_POST['Penghasilan ibu'];
          echo "Penghasilan ibu : $penghasilan_ibu<br>"; 
          }
          ?>
</body>
</html>