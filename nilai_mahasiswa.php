<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>NILAI MAHASISWA</title>
  </head>
  <body><br>

  <h3 align="center">NILAI MAHASISWA</h3>
  <div class="container">
    <form action="" method="POST" name="NILAI_MAHASISWA">
<div class="mb-3">
  <label class="form-label">nama mahasiswa</label>
  <input type="text" class="form-control" id="nama_mahasiswa" name="nm">
</div>
<div class="mb-3">
  <label class="form-label">kelas mahasiswa</label>
  <input type="text" class="form-control" id="kelas_mahasiswa" name="kls">
</div>
<div class="mb-3">
  <label class="form-label">absensi</label>
  <input type="text" class="form-control" id="absensi_mahasiswa" name="abs">
</div>
<div class="mb-3">
  <label class="form-label">tugas</label>
  <input type="text" class="form-control" id="tugas_mahasiswa" name="tgs">
</div>
<div class="mb-3">
  <label class="form-label">UTS (ujian tengah semester)</label>
  <input type="text" class="form-control" id="UTS_mahasiswa" name="uts">
</div>
<div class="mb-3">
  <label class="form-label">UAS (ujian akhir semester)</label>
  <input type="text" class="form-control" id="UAS_mahasiswa" name="uas">
</div>
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="submit" class="btn btn-primary" name="submit">Hitung</button>
</div>
</form>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html><br>

<?php
if(isset($_POST['submit'])){
    $nama = $_POST['nm'];
    $kelas = $_POST['kls'];
    $absensi = $_POST['abs'];
    $tugas = $_POST['tgs'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $absen2 = 0.2  * $absensi;
    $tugas2 = 0.25 * $tugas;
    $uts2   = 0.20 * $uts;
    $uas2   = 0.35 * $uas;
    $nilaiakhir = $absen2 + $tugas2 + $uts2 + $uas2;

    echo"<div class='container'>";
    echo"<h3>NILAI MAHASISWA</h3>";
    echo"Nama        : $nama</br>";
    echo"Kelas       : $kelas</br>"; 
    echo"Nilai Absen : $absen2<br>";
    echo"Nilai Tugas : $tugas2<br>";
    echo"Nilai UTS   : $uts2<br>";
    echo"Nilai UAS   : $uas2<br>";
    echo"Nilai Total : $nilaiakhir";  
}
?>