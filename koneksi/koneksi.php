
<?php
    $server='localhost';
    $username="u7022108_intan";
    $password="prati";
    $db="barang";

    $koneksi=mysqli_connect($server,$username,$password,$db)or die(mysqli_error($koneksi));

    // if($koneksi){
    //     echo "database berhasil terkoneksi";
    // }elseif (!$koneksi){
    //     die('koneksi gagal'.mysqli_connect_error());
    // }
?>