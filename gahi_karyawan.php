<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body><br>
    <h3 align="center">Gaji Pegawai</h3>

    <div class="container">
<form action="" method="POST" name="GAJI_PENGAWAI">
<div class="mb-3">
  <label class="form-label">golongan</label>
  <input type="text" class="form-control" id="golongan_pegawai" name="gp">
</div>
<div class="mb-3">
  <label class="form-label">jumlah anak</label>
  <input type="text" class="form-control" id="jumlah_anak" name="ja">
</div>
<div class="mb-3">
  <label class="form-label">jam lembur</label>
  <input type="text" class="form-control" id="jam_lembur" name="jl">
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
    $gol = $_POST['gp'];
    $ja = $_POST['ja'];
    $jl = $_POST['jl'];

    if($gol == 1){
        $gj_p = 1700000;
        $ti = 300000;
        $ta = 100000;
        $lbr = 50000;
    }elseif($gol == 2){
      $gj_p = 2000000;
        $ti = 500000;
        $ta = 150000;
        $lbr = 75000;
    }elseif($gol == 3){
      $gj_p = 2500000;
        $ti = 750000;
        $ta = 200000;
        $lbr = 100000;
    }
    $gaji_kotor = $gj_p + $ti + ($ta * $ja) + ($lbr * $jl);
    $pajak = $gaji_kotor * 0.05;
    $gaji_bersih = $gaji_kotor - $pajak - 100000;
    $total_lembur = $lbr * $jl;
?>
<div class="container">
<div class="card" style="width: 25rem;">
<div class="card-body">
  <p>============================</p>
  <p>golongan :<?php echo $gol ?></p>
  <p>gaji pokok :Rp.<?php echo $gj_p?></p>
  <p>tunangan istri :Rp.<?php echo $ti?></p>
  <P>jumlah anak :<?php echo $ja?></P>
  <p>tunjangan  anak :Rp.<?php echo $ta?></p>
  <p>jumlah jam lembur :<?php echo $jl?></p>
  <p>lembur :Rp.<?php echo $total_lembur?></p>
  <p>--------------------------------------------------</p>
  <p>gaji kotor :Rp.<?php echo $gaji_kotor?></p>
  <p>--------------------------------------------------</p>
  <p>potongan</p>
  <p>a. BPJS :Rp.100000</p>
  <p>a. pajak :Rp.<?php echo $pajak?></p>
  <p>============================</p>
  <p>total gaji :Rp.<?php echo $gaji_bersih?></p>
  <p>============================</p>
</div>
</div>
</div>
 <?php }?>