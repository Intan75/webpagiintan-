<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap</title>
    <!-- link boostrap -->
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css.map">
    <!-- css for reboot -->
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css.map">
    <!-- css for bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css.map">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="#">Sweet Thing</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Fashionable<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Favorit Kamu</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Barang</a>
            <a class="dropdown-item" href="#">Harga barang</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Diskon barang</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
<div class="container">
<form method="POST">
    <div class="form-group">
        <label for="barang">Harga barang</label>
        <input type="number" class="form-control col-sm-2" name="barang">
    </div>
    <div class="form-group">
        <label for="diskon">Diskon</label>
        <input type="number" class="form-control col-sm-2" name="diskon">
    </div>
    <!-- <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
    <button type="submit" name="input" class="btn btn-secondary">Input</button>
    </form>
    <!-- boostsrap -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.js.map"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js.map"></script>
    <!-- for bootstrap -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.js.map"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.min.js.map"></script>
</div>
<footer class="page-footer font-small blue pt-4">

<!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
            <li>
            <a href="#!">Link 1</a>
            </li>
            <li>
            <a href="#!">Link 2</a>
            </li>
            <li>
            <a href="#!">Link 3</a>
            </li>
            <li>
            <a href="#!">Link 4</a>
            </li>
        </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
            <li>
            <a href="#!">Link 1</a>
            </li>
            <li>
            <a href="#!">Link 2</a>
            </li>
            <li>
            <a href="#!">Link 3</a>
            </li>
            <li>
            <a href="#!">Link 4</a>
            </li>
        </ul>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

    </footer>
<!-- akhir Footer -->
    <!-- class row 1
    <div class="row">
        <div class="col-md-3">
            <h1>Halo</h1>
        </div>
        <div class="col-md-3">
            <h1>haii</h1>
        </div>
        <div class="col-md-3">
            <h1>salaam</h1>
        </div>
        <div class="col-md-3">
            <h1>kenal</h1>
        </div>
    </div>
    row 2
        <div class="row">
        </div>
    </div>
</body>
</html>
    
<?php
    if(isset($_POST['input'])){
        $barang=$_POST['barang'];
        $diskon=$_POST['diskon'];
        $harga_minimal_diskon=400000;

        if($barang>=$harga_minimal_diskon){
            // harga - (harga * $diskon / 100)
            $harga_setelah_diskon=$barang - ($barang*$diskon/100);
            echo "Total harga $barang setelah mendapat diskon adalah Rp. $harga_setelah_diskon";
        }else{
            echo "harga $barang ";
        }
    }
?>
    
    
    