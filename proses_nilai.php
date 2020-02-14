<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nilai mahasiswa</title>
</head>
<body>
    <form action="" method="POST">
        <label>NIM:</label>
        <input type="number" name="nim" placeholder="masukkan NIM"><br><br>

        <label>Nama:</label>
        <input type="text" name="nama" placeholder="Masukkan nama"><br><br>

        <label>Jurusan:</label>
        <input type="text" name="jurusan" placeholder="Masukkan jurusan"><br><br>

        <label>Nilai harian:</label>
        <input type="number" name="harian" placeholder="Masukkan nilai harian"><br><br>

        <label>Nilai quis:</label>
        <input type="number" name="quis" placeholder="Masukkan nilai quis"><br><br>

        <label>Nilai uts:</label>
        <input type="number" name="uts" placeholder="Masukkan nilai uts"><br><br>

        <label>Nilai uas:</label>
        <input type="number" name="uas" placeholder="Masukkan nilai uas" value="input"><br><br>

        <input type="submit" name="input" value="input"><br>



    </form>
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


        if($nilai<=50){
            echo "Grade yang diperoleh oleh $nama dengan nim $NIM jurusan $jurusan dengan nilai $nilai adalah E";
        }elseif ($nilai<=65){
            echo "Grade yang diperoleh oleh $nama dengan nim $NIM jurusan $jurusan dengan nilai $nilai adalah D";
        }elseif ($nilai<=72){
            echo "Grade yang diperoleh oleh $nama dengan nim $NIM jurusan $jurusan dengan nilai $nilai adalah C";
        }elseif ($nilai<=83){
            echo "Grade yang diperoleh oleh $nama dengan nim $NIM  jurusan $jurusan dengan nilai $nilai adalah B";
        }elseif ($nilai<=100 || $nilai=100){
            echo "Grade yang diperoleh oleh $nama dengan nim $NIM jurusan $jurusan dengan nilai $nilai adalah A";
        }else {
            echo "$nama dengan nim $nim jurusan $jurusan dinyatakan tidak lulus ";
        }

    }

        

?>