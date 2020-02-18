<?php
include 'header.php';
?>
    <div class="container-fluid">
    <!-- sintax navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Intans</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Spongebob</a>
            <a class="dropdown-item" href="#">Patrick</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Squidwird</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <!-- tutup sintax navbar -->
    <!-- sintax slider  -->
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/imgg/allspombob.png" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
        <img src="assets/imgg/spombob3.png" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
        <img src="assets/imgg/spombob.png" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
        <img src="assets/imgg/spombob2.png" class="d-block w-100" alt="">
        </div>
            <div class="col-2"></div>
        </div>
    </div>
            </div>
            
    </div>
    <!-- tutup sintax slider -->
    <!-- awal tabel -->
        <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
        </tr>
    </tbody>
    </table>
    <!-- akhir tabel -->
    <!-- awal Footer -->
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


<?php
include 'footer.php';
?>

