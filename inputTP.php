<?php
	include 'db.php';
	require 'index.php';

	if ($_POST) {
		$nama=$_POST['nama'];
		$harga=$_POST['harga'];
    $per=$_POST['per'];
    $keterangan=$_POST['keterangan'];

		echo $nama;
		echo $harga;
    echo $per;
    echo $keterangan;

		$query = mysqli_query($connect,"INSERT INTO tenda_panggung VALUES('','$nama',$harga,'$per','$keterangan')");

		 if ($query) {
		 	header("location:outputTP.php");
		 }else{
		 	die("nah lo");
		 }
	}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container">
		<h5 class="display-4 text-center py-5">FORM INPUT TENDA DAN PANGGUNG</h5>
		<p class="lead text-center">Masukkan Data</p>
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<form action="inputTP.php" method="post">
				  <div class="form-group">
				    <label for="nama">Nama Panggung / Tenda</label>
				    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Panggung / Tenda">
				  </div>
				  <div class="form-group">
				    <label for="harga">Harga</label>
				    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
				  </div>
				  <div class="form-group">
				    <label for="per">Per</label>
            <select class="form-control" id="per" name="per">
              <option value="m2">m2</option>
              <option value="Unit">Unit</option>
            </select>
				  </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" name="keterangan" id="keterangan" rows="3" placeholder="Keterangan"></textarea>
          </div>
				  <button type="submit" class="btn btn-danger">Submit</button>
				</form>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
</body>
</html>
