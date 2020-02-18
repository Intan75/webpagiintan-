<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proses nilai</title>
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
        <label for="NIM">NIM</label>
        <input type="number" class="form-control col-sm-2" name="nim">
    </div>
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" class="form-control col-sm-2" name="nama">
    </div>
    <div class="form-group">
        <label for="Nama">Jurusan</label>
        <input type="text" class="form-control col-sm-2" name="jurusan">
    </div>
    <div class="form-group">
        <label for="Nama">Nilai Harian</label>
        <input type="number" class="form-control col-sm-2" name="harian">
    </div>
    <div class="form-group">
        <label for="Nama">Nilai quis</label>
        <input type="number" class="form-control col-sm-2" name="quis">
    </div>
    <div class="form-group">
        <label for="Nama">Nilai UTS</label>
        <input type="number" class="form-control col-sm-2" name="uts">
    </div>
    <div class="form-group">
        <label for="Nama">Nilai UAS</label>
        <input type="text" class="form-control col-sm-2" name="uas">
    </div>
    <button type="submit" name="input" class="btn btn-primary">Input</button>
</form>



    <!-- for bundle -->
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
        $NIM=$_POST ['nim'];
        $nama=$_POST ['nama'];
        $jurusan=$_POST ['jurusan'];
        $harian=$_POST ['harian'];
        $quis=$_POST ['quis'];
        $uts=$_POST ['uts'];
        $uas=$_POST ['uas'];
        $nilai=($harian*10/100)+($quis*15/100)+($uts*35/100)+($uas*40/100);

        echo "NIM $NIM <br>";
        echo "bernama $nama <br>";
        echo "jurusan $jurusan <br>";
        echo "memperoleh nilai harian $harian <br>";
        echo "nilai quis $quis <br>";
        echo "nilai uts $uts <br>";
        echo "dan nilai uas sebesar $uas <br>";
    }


        if($nilai<=50){
            echo"
            <div class='alert alert-danger' role='alert'>
            Grade yang diperoleh oleh $nama dengan nim $NIM jurusan $jurusan dengan nilai $nilai adalah E
            </div>";
        }elseif ($nilai<=65){
            echo"
            <div class='alert alert-success' role='alert'>
            Grade yang diperoleh oleh $nama dengan nim $NIM jurusan $jurusan dengan nilai $nilai adalah D
            </div>";
        }elseif ($nilai<=72){
            echo"
            <div class='alert alert-secondary' role='alert'>
            Grade yang diperoleh oleh $nama dengan nim $NIM jurusan $jurusan dengan nilai $nilai adalah C
            </div>";
        }elseif ($nilai<=83){
            echo"
            <div class='alert alert-primary' role='alert'>
            Grade yang diperoleh oleh $nama dengan nim $NIM  jurusan $jurusan dengan nilai $nilai adalah B
            </div>";
        }elseif ($nilai<=100 || $nilai=100){
            echo"
            <div class='alert alert-primary' role='alert'>
            Grade yang diperoleh oleh $nama dengan nim $NIM jurusan $jurusan dengan nilai $nilai adalah A
            </div>";
        }else{
            echo"
            <div class='alert alert-light' role='alert'>
            $nama dengan nim $nim jurusan $jurusan dinyatakan tidak lulus 
            </div>";
        }
        ?>