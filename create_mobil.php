<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Member</title>
</head>

<body>

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Tambah</h1>
	<a class="btn btn-sm btn-info" href="tblmobil.php">Kembali</a>
	<br><br>
	<form action="Proses.php" method="post">
		<label>ID Mobil</label>
		<br>
		<input class="form-control" type="number" name="mobil_id">
		<br>
		<label>Merk</label>
		<br>
		<input class="form-control" type="text" name="merk"><br>
		<br>
		<label>Tahun Keluaran</label>
		<br>
		<input class="form-control" type="number" name="thn_keluaran">
		<br>
		<label>Tarif</label>
		<input class="form-control" type="number" name="tarif">
		<br>
		<br>
		
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-success" type="submit" name="submit_mobil">Submit</button>
		
	</form>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="images/home/hero.png" class="img-fluid" alt="">
    </div>
  </div>
</div>

	
</body>
<?php
include 'footer.html';
?>
</html>