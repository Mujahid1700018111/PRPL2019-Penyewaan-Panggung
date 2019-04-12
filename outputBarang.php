<?php
  include 'db.php';
  require 'index.php';
  $query = mysqli_query($connect, "SELECT * FROM `barang` GROUP BY nama_barang");
  // $query1 = mysqli_query($connect, "SELECT * FROM `kategori`  GROUP BY nama_kategori");
  // $query2 = mysqli_query($connect, "SELECT * FROM `customer` GROUP BY nama_customer");
  // $query3 = mysqli_query($connect,"SELECT * FROM `beli`");


  // print_r($query);
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1 class="display-3 text-center py-5">Table Data Barang</h1>
    <table border="1" class="table">
      <tr class="p-3 mb-2 bg-dark text-white">
        <th> Kode Barang </th>
        <th> Nama Barang </th>
        <th> Jumlah Barang </th>
        <th colspan="2"> Actions </th>
      </tr>

    <?php

      foreach ($query as $key)
      {
        echo "
          <tr>
            <td>$key[kd_barang]</td>
            <td>$key[nama_barang]</td>
            <td>$key[jumlah_barang]</td>
            <td><a href=editbarang.php?id=$key[kd_barang]>Edit</a></td>
            <td><a href=deletebarang.php?id=$key[kd_barang]>Delete</a></td>
          </tr>
        ";

      }
    ?>

    </table>
  </div>

</body>
</html>
