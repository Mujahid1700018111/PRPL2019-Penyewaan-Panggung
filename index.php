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
            <a class="nav-link" href="output.php">Table<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="inputkaryawan.php">Insert Karyawan<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="outputproduk.php">Produk<span class="sr-only">(current)</span></a>
          </li>

        </ul>
         <form class="form-inline my-2 my-lg-0" form method="post" action="searching.php">
           <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-succses my-2 my-sm-0"  type="submit" name ="send" >Search</button>
         </form>
      </div>

    </nav>
</body>
</html>
