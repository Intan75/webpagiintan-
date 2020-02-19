<?php

include 'header.php';
?>



<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login2</title>
</head>
<body>
    <form action="" method="POST">
        <label>User:</label>
        <input type="text" name="user"><br><br>
        <label>Password:</label>
        <input type="password" name="pass"><br>
        <input type="submit" name="tambah" value="input">
    </form>
    </body>
    </html>



    <?php
    if(isset($_POST['tambah'])){
        $username=$_POST['user'];
        $password=$_POST['pass'];

        if ($username=="admin"and$password=="admin123"){
            header ('location: proses_nilai.php');
        }elseif($username=="siswa"and $password=="siswa123"){
            header ('location: biodata.php');
        }else{
            echo "Login gagal";
        }
    }
    ?>

<br>
<br>
<?php
    include 'footer.php';
?>