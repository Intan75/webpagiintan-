<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diskon barang</title>
</head>
<body>
    <form action="" method="POST">
        <label>Harga barang:</label>
        <input type="number" name="barang" placeholder="Masukkan harga barang"><br><br>
        <label>Diskon:</label>
        <input type="number" name="diskon" placeholder="Masukkan harga barang"><br><br>
        <input type="submit" name="input" value="input">

    </form>
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