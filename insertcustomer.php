<?php 
	require 'index.php';
	include 'db.php';
	
	if ($_POST) {
		$id_customer =$_POST['id_customer'];
		$nama_customer=$_POST['nama_customer'];
		$no_tlp=$_POST['no_tlp'];
		$alamat=$_POST['alamat'];

		echo $id_customer;
		echo $nama_customer;
		echo $no_tlp;
		echo $alamat;

		$query = mysqli_query($connect,"INSERT INTO customer VALUES($id_customer,'$nama_customer',$no_tlp,'$alamat')");

		 if ($query) {
		 	header("location:output.php");
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
				<form action="insertcustomer.php" method="post">
				  <div class="form-group">
				    <label for="id_customer">ID Customer</label>
				    <input type="text" class="form-control" id="id_customer" name="id_customer" placeholder="ID Customer">
				  </div>
				  <div class="form-group">
				    <label for="nama_customer">Nama Customer</label>
				    <input type="text" class="form-control" id="nama_customer" name="nama_customer" placeholder="Kode Kategori">
				  </div>
				  <div class="form-group">
				    <label for="no_tlp">Nomor Telepon</label>
				    <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nomor Telepon">
				  </div>
				  <div class="form-group">
				    <label for="alamat">Alamat</label>
				    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
				  </div>
				  <button type="submit" class="btn btn-danger">Submit</button>
				</form>
			</div>			
			<div class="col-2"></div>		
		</div>
	</div>
</body>
</html>

