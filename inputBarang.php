<?php
	include 'db.php';
	require 'index.php';

	if ($_POST) {
		$kd_barang =$_POST['kd_barang'];
		$nama_barang=$_POST['nama_barang'];
		$jumlah_barang=$_POST['jumlah_barang'];

		echo $kd_barang;
		echo $nama_barang;
		echo $jumlah_barang;

		$query = mysqli_query($connect,"INSERT INTO barang VALUES($kd_barang,'$nama_barang',$jumlah_barang)");

		 if ($query) {
		 	header("location:outputBarang.php");
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
		<h5 class="display-4 text-center py-5">FORM INPUT BARANG</h5>
		<p class="lead text-center">Masukkan Data</p>
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<form action="inputBarang.php" method="post">
				  <div class="form-group">
				    <label for="kd_barang">Kode Barang</label>
				    <input type="text" class="form-control" id="kd_barang" name="kd_barang" placeholder="Kode Barang">
				  </div>
				  <div class="form-group">
				    <label for="nama_barang">Nama Barang</label>
				    <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
				  </div>
				  <div class="form-group">
				    <label for="jumlah_barang">Jumlah Barang</label>
				    <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" placeholder="Jumlah Barang">
				  </div>
				  <button type="submit" class="btn btn-danger">Submit</button>
				</form>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
</body>
</html>
