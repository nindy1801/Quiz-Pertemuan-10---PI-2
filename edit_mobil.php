<?php
include 'header.html';
$mobil_id = $_GET['mobil_id'];
include 'model.php';
$model = new Model();
$data = $model->edit_mobil($mobil_id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Mobil</title>
</head>

<body>
	
	<div class="container">
  	<div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Edit Mobil</h1>
	<br><br>
	<form action="proses.php" method="post">

		<label>ID Mobil</label>
		<br>
		<input class="form-control" type="number" name="mobil_id" value="<?php echo $data->mobil_id ?>" >
		<br>
		<label>Merk</label>
		<br>
		<input class="form-control" type="text" name="merk" value= "<?php echo $data->merk ?>">
		<br>
		<label>Tahun Keluaran</label>
		<br>
		<input class="form-control" type="number" name="thn_keluaran" value="<?php echo $data->thn_keluaran ?>">
		<br>
		<label>Tarif</label>
		<input class="form-control" type="number" name="tarif" value= "<?php echo $data->tarif ?>">
		<br>
        <br>
		<a class="btn btn btn-info"  href="tblmobil.php">Kembali</a> <button class="btn btn btn-success" type="submit" name="submit_editmobil">Submit</button> 
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