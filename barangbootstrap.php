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
    <button type="submit" name="input" class="btn btn-primary">Input</button>
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
            echo "total harga $barang setelah mendapat diskon adalah Rp. $harga_setelah_diskon";
        }else{
            echo "harga $barang ";
        }
    }
?>
    
    
    