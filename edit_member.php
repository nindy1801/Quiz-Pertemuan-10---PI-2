<?php
include 'header.html';
$member_id = $_GET['member_id'];
include 'model.php';
$model = new Model();
$data = $model->edit_member($member_id);
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

		<label>ID Member</label>
		<br>
		<input class="form-control" type="text" name="member_id" value="<?php echo $data->member_id ?>">
		<br>
		<label>Nama</label>
		<br>
		<input class="form-control" type="text" name="nama" value="<?php echo $data->nama ?>">
		<br>
		<label>Alamat</label>
		<br>
		<input class="form-control" type="text" name="alamat" value="<?php echo $data->alamat ?>">
		<br>
		<label>Nomor Telpon</label>
		<input class="form-control" type="number" name="tlp" value="<?php echo $data->tlp?>">
		<br>
        <br>
		<a class="btn btn btn-info"  href="tblmember.php">Kembali</a> <button class="btn btn btn-success" type="submit" name="submit_editmember">Submit</button> 
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