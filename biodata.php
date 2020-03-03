<?php
    include 'header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>biodata</title>
</head>
<body>
    <div class="container">
    <form method="POST" action="proses/proses_biodata.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control col-sm-3" name="nama">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea type="text" class="form-control col-sm-3" name="alamat"></textarea>
    </div>
    <div class="form-group">
        <label for="no_hp">No.hp</label>
        <input type="number" class="form-control col-sm-3" name="no_hp">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control col-sm-3" name="email">
    </div>
    <div class="form-group">
        <label for="hobby">Hobby</label><br>
        <input type="checkbox"  name="hobby1" value="menyanyi">Menyanyi <br>
        <input type="checkbox"  name="hobby2" value="membaca">Membaca <br>
        <input type="checkbox"  name="hobby3" value="menari">Menari 
    </div>
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal lahir</label>
        <input type="date"  placeholder="dd/mm/yyyy" class="form-control col-sm-3" name="tanggal_lahir">
    </div>
    <div class="form-group">
        <label for="tempat_lahir">Tempat lahir</label>
        <input type="text"  class="form-control col-sm-3" name="tempat_lahir">
    </div>
    <div class="form-group">
        <label for="jk">Jenis kelamin</label><br>
        <input type="radio"  name="jk" value="laki-laki">Laki-laki <br>
        <input type="radio"  name="jk" value="perempuan">Perempuan
    </div>
    <div class="form-group row">
        <label for="uploadfile" class="col-sm-1 ">Upload File</label>
        <div class="btn btn-danger btn-sm float-left">
        <input class="file-path validate" name="foto" type="file">
        </div>
    </div>
    <button type="submit" name="input" class="btn btn-primary" value="input">Input</button>
</form>
</div>
</body>
</html>

<br>
<?php
include 'footer.php';
?>
<!-- <html>
    <head>
    <title>pengolahan form</title></head>
    <body>
        <form action="" method="post" name="input">
            Nama anda: <input type="text" name= "nama"><br> 
            <input type="submit" name="input" value="input">
            <FORM action="" method=""> <br>
            <label>Nama :</label>
            <input type="text" name="nama" placeholder="Masukkan nama"><br><br>
            <label>Email :</label>
            <input type="email" name="email" placeholder="admin@email"> <br> <br>
            <label>Jenis kelamin:</label>
            <input type="radio" name="jk">Laki-laki
            <input type="radio" name="jk">Perempuan <br><br>
            <label>Alamat : </label><br>
            <textarea name="alamat" placeholder="Masukkan alamat" cols="50px"></textarea> <br><br>
            <label>Tanggal lahir :</label>
            <input name="tl" type="date" placeholder="dd/mm/yyyy"><br><br>
            <label>Tempat lahir:</label>
            <input type="text" name="tempat lahir"><br><br>
            <label>No hp:</label>
            <input name="nomor"  type="number" placeholder="Masukkan no hp"><br><br>
            <label>Hobby:</label>
            <input type="checkbox" name="hobby1" value="menyanyi">Menyanyi
            <input type="checkbox" name="hobby2" value="membaca">Membaca
            <input type="checkbox" name="hobby3" value="menari">Menari 
            <input type="submit" name="tambah" value="input">

        </form>
    </body>
</html> -->



<!--
    // if (isset ($_POST ['tambah'])){
    //     $nama_saya=$_POST ['nama'];
    //     $email_saya=$_POST ['email'];
    //     $jenis_kelamin=$_POST ['jk'];
    //     $alamat=$_POST ['alamat'];
    //     $tanggal_lahir=$_POST ['tl'];
    //     $tempat=$_POST ['tempat_lahir'];
    //     $no_hp=$_POST ['nomor'];
    //     $hobby1=$_POST ['hobby1'];
    //     $hobby2=$_POST ['hobby2'];
    //     $hobby3=$_POST ['hobby3'];
    //     echo "Nama saya adalah <b>$nama_saya </b>" ;
    //     echo "email saya adalah : <b>$email_saya</b>" ;
    //     echo "saya berjenis kelamin : <b>$jenis_kelamin</b>" ;
    //     echo "alamat saya di : <b>$alamat</b>" ;
    //     echo "saya lahir pada tanggal : <b>$tanggal_lahir</b>" ;
    //     echo "tempat lahir saya di : <b>$tempat</b>" ;
    //     echo "hubungi saya di nomor : <b>$no_hp</b>" ;
    //     echo "hobby saya adalah : <b>$hobby1</b>" ;
    //     echo "hobby saya adalah : <b>$hobby2</b>" ;
    //     echo "hobby saya adalah : <b>$hobby3</b>" ;
    
    

?> -->