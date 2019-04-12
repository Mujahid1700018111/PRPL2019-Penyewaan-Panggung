<?php
  include 'db.php';
  $query = mysqli_query($connect, "SELECT * FROM `tenda_panggung`");
  // $query1 = mysqli_query($connect, "SELECT * FROM `kategori`  GROUP BY nama_kategori");
  // $query2 = mysqli_query($connect, "SELECT * FROM `customer` GROUP BY nama_customer");
  // $query3 = mysqli_query($connect,"SELECT * FROM `beli`");

  if(isset($_POST["send"])){
    $key=$_POST["search"];
    $query =mysqli_query($connect, "SELECT * FROM tenda_panggung WHERE nama LIKE '%$key%'");
  }


  // print_r($query);
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="output.php">PRPL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="output.php">Table Karyawan<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="outputTP.php">Daftar Panggung dan Tenda<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="inputkaryawan.php">Insert Karyawan<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="inputTP.php">Input Tenda atau Panggung<span class="sr-only">(current)</span></a>
          </li>
        </ul>
         <form class="form-inline my-2 my-lg-0" form method="post" action="outputTP.php">
           <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-succses my-2 my-sm-0"  type="submit" name ="send" >Search</button>
         </form>
      </div>

    </nav>


  <div class="container">
    <h1 class="display-3 text-center py-5">PRICE LIST TENDA DAN PANGGUNG</h1>
    <table border="1" class="table text-center">
      <tr class="p-3 mb-2 bg-dark text-white">
        <th> Nama Tenda / Panggung </th>
        <th> Harga </th>
        <th> Sewa Per </th>
        <th> Keterangan </th>
      </tr>

    <?php

      foreach ($query as $key)
      {
        echo "
          <tr>
            <td>$key[nama]</td>
            <td>$key[harga]</td>
            <td>$key[per]</td>
            <td>$key[keterangan]</td>
          </tr>
        ";

      }
    ?>

    </table>
  </div>

</body>
</html>
