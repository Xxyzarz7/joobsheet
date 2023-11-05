<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>BIG SUPER</title>
  </head>
  <body><br>
    <!--judul -->
<h3 align="center">BIG SUPER</h3>

<div class="container">
<form action="" method="POST" name="BIG_SUPER">
<div class="mb-3">
  <label class="form-label">nama barang</label>
  <input type="text" class="form-control" id="nama_barang" name="nm">
</div>
<div class="mb-3">
  <label class="form-label">jumlah barang</label>
  <input type="text" class="form-control" id="jumlah_barang" name="jml">
</div>
<div class="mb-3">
  <label class="form-label">harga barang</label>
  <input type="text" class="form-control" id="harga_barang" name="hrg">
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
<!-- php -->
<?php
if(isset($_POST['submit'])) {
    $nama = $_POST['nm'];
    $jumlah = $_POST['jml'];
    $harga = $_POST['hrg'];

    echo "<div class='container'>";
    echo "<h3>Jumlah Yang Harus Di Bayar</h3>";
    $hitung = $harga * $jumlah;
    $pajak = $hitung * 0.1;
    $diskon = $hitung * 0.2;
    $total = $hitung + $pajak - $diskon ;

    echo"Total : $hitung </br>";
    echo"Pajak 10% : $pajak </br>";
    echo"Diskon 20% : $diskon </br>";
    echo"Total : $total </br>";
}
?>