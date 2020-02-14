<html>
    <head><title>pengolahan form</title></head>
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
</html>



<?php
    if (isset ($_POST ['tambah'])){
        $nama_saya=$_POST ['nama'];
        $email_saya=$_POST ['email'];
        $jenis_kelamin=$_POST ['jk'];
        $alamat=$_POST ['alamat'];
        $tanggal_lahir=$_POST ['tl'];
        $tempat=$_POST ['tempat_lahir'];
        $no_hp=$_POST ['nomor'];
        $hobby1=$_POST ['hobby1'];
        $hobby2=$_POST ['hobby2'];
        $hobby3=$_POST ['hobby3'];
        echo "Nama saya adalah <b>$nama_saya </b>" ;
        echo "email saya adalah : <b>$email_saya</b>" ;
        echo "saya berjenis kelamin : <b>$jenis_kelamin</b>" ;
        echo "alamat saya di : <b>$alamat</b>" ;
        echo "saya lahir pada tanggal : <b>$tanggal_lahir</b>" ;
        echo "tempat lahir saya di : <b>$tempat</b>" ;
        echo "hubungi saya di nomor : <b>$no_hp</b>" ;
        echo "hobby saya adalah : <b>$hobby1</b>" ;
        echo "hobby saya adalah : <b>$hobby2</b>" ;
        echo "hobby saya adalah : <b>$hobby3</b>" ;
    
    }

?>