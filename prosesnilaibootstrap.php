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
<div class="container">
<form method="POST" action="proses/proses_nilai.php">
    <!-- <div class="form-group">
        <label for="id">Id</label>
        <input type="number" class="form-control col-sm-2" name="id">
    </div> -->

    <div class="form-group">
        <label for="NIM">NIM</label>
        <input type="number" class="form-control col-sm-3" name="nim">
    </div>
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" class="form-control col-sm-3" name="nama">
    </div>
    <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" class="form-control col-sm-3" name="jurusan">
    </div>
    <div class="form-group">
        <label for="matakuliah">Mata kuliah</label>
        <input type="text" class="form-control col-sm-3" name="mata_kuliah">
    </div>
    <div class="form-group">
        <label for="harian">Nilai Harian</label>
        <input type="number" class="form-control col-sm-3" name="harian">
    </div>
    <div class="form-group">
        <label for="quis">Nilai quis</label>
        <input type="number" class="form-control col-sm-3" name="quis">
    </div>
    <div class="form-group">
        <label for="uts">Nilai UTS</label>
        <input type="number" class="form-control col-sm-3" name="uts">
    </div>
    <div class="form-group">
        <label for="uas">Nilai UAS</label>
        <input type="text" class="form-control col-sm-3" name="uas">
    </div>
    <button type="submit" name="input" class="btn btn-primary">Input</button>
</form>
</div>


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
    // if(isset($_POST['input'])){
    //     $NIM=$_POST ['nim'];
    //     $nama=$_POST ['nama'];
    //     $jurusan=$_POST ['jurusan'];
    //     $harian=$_POST ['harian'];
    //     $quis=$_POST ['quis'];
    //     $uts=$_POST ['uts'];
    //     $uas=$_POST ['uas'];
    //     $nilai=($harian*10/100)+($quis*15/100)+($uts*35/100)+($uas*40/100);

    //     echo "NIM $NIM <br>";
    //     echo "bernama $nama <br>";
    //     echo "jurusan $jurusan <br>";
    //     echo "memperoleh nilai harian $harian <br>";
    //     echo "nilai quis $quis <br>";
    //     echo "nilai uts $uts <br>";
    //     echo "dan nilai uas sebesar $uas <br>";
    // }

    include 'koneksi/koneksi.php';

        $tampil_nilai=mysqli_query($koneksi,"select * from mahasiswa") or die (mysqli_error ($tampil_nilai));

        while($data=mysqli_fetch_array ($tampil_nilai)){
            if($data['nilai_akhir']<=50){
                echo"
                <div class='alert alert-danger' role='alert'>
                Nama : ".$data['nama_mahasiswa']." dengan Nim :".$data['nim']." dan Jurusan :".$data['jurusan']." dengan mata kuliah : ".$data['mata_kuliah']. "memperoleh nilai sebesar ".$data['nilai_akhir']."  maka dia mendapat grade E
                <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>

                <a href='proseshapusmahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-danger'>Hapus</a>
                </div>";
            }elseif ($data['nilai_akhir']<=65){
                echo"
                <div class='alert alert-success' role='alert'>
                Nama : ".$data['nama_mahasiswa']." dengan Nim :".$data['nim']." dan Jurusan :".$data['jurusan']." dengan mata kuliah : ".$data['mata_kuliah']." memperoleh nilai sebesar ".$data['nilai_akhir']."  maka dia mendapat grade D
                <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>

                <a href='proses/proseshapusmahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-danger'>Hapus</a>
                </div>";
            }elseif ($data['nilai_akhir']<=72){
                echo"
                <div class='alert alert-secondary' role='alert'>
                Nama : ".$data['nama_mahasiswa']." dengan Nim :".$data['nim']." dan Jurusan :".$data['jurusan']." dengan mata kuliah : ".$data['mata_kuliah']." memperoleh nilai sebesar ".$data['nilai_akhir']."  maka dia mendapat grade C
                <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>

                <a href='proses/proseshapusmahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-danger'>Hapus</a>
                </div>";
            }elseif ($data['nilai_akhir']<=83){
                echo"
                <div class='alert alert-primary' role='alert'>
            Nama : ".$data['nama_mahasiswa']." dengan Nim :".$data['nim']." dan Jurusan :".$data['jurusan']." dengan mata kuliah : ".$data['mata_kuliah']." memperoleh nilai sebesar ".$data['nilai_akhir']."  maka dia mendapat grade B
            <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>

            <a href='proses/proseshapusmahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-danger'>Hapus</a>
                </div>";
            }elseif ($data['nilai_akhir']<=100 || $nilai=100){
                echo"
                <div class='alert alert-primary' role='alert'>
                Nama : ".$data['nama_mahasiswa']." dengan Nim :".$data['nim']." dan Jurusan :".$data['jurusan']." dengan mata kuliah : ".$data['mata_kuliah']." memperoleh nilai sebesar ".$data['nilai_akhir']."  maka dia mendapat grade A
                <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>

                <a href='proses/proseshapusmahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-danger'>Hapus</a>
                </div>";
            }
        }
        ?>
