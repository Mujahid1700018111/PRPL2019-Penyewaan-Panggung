<?php
  include 'db.php';
  require 'index.php';
  $query = mysqli_query($connect, "SELECT * FROM `barang` GROUP BY barang_id");
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
    <h1 class="display-3 text-center py-5">Produk</h1>
    <table border="1" class="table">
      <tr class="p-3 mb-2 bg-dark text-white">
        <th> ID Produk </th>
        <th> Nama Produk </th>
        <th> Harga Sewa(hari)</th>
      </tr>

    <?php

      foreach ($query as $key)
      {
        echo "
          <tr>
            <td>$key[barang_id]</td>
            <td>$key[nama_barang]</td>
            <td>$key[harga]</td>
          </tr>
        ";

      }
    ?>

    </table>
  </div>

</body>
</html>
