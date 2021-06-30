<?php
include 'header.html';
$rental_id = $_GET['rental_id'];
include 'model.php';
$model = new Model();
$data = $model->edit_rental($rental_id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit member</title>
</head>

<body>
	
	<div class="container">
  	<div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Edit member</h1>
	<br><br>
	<form action="proses.php" method="post">

					<th>ID Rental</th>
					<th>ID Mobil</th>
					<th>ID member</th>
					<th>Lama Rental</th>
					<th>Aksi</th>

		<label>ID Rental</label>
		<br>
		<input class="form-control" type="number" name="rental_id" value="<?php echo $data->rental_id ?>">
		<br>
		<label>ID Mobil</label>
		<br>
		<input class="form-control" type="number" name="mobil_id" value="<?php echo $data->mobil_id?>">
		<br>
		<label>ID member</label>
		<br>
		<input class="form-control" type="number" name="member_id" value="<?php echo $data->member_id ?>">
		<br>
		<label>Lama Rental</label>
		<input class="form-control" type="number" name="lama_rental" value="<?php echo $data->lama_rental?>">
		<br>
        <br>
		<a class="btn btn btn-info"  href="tblrentalphp">Kembali</a> <button class="btn btn btn-success" type="submit" name="submit_editrental">Submit</button> 
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