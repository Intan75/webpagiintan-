<?php
include '../koneksi/koneksi.php';

if (isset ($_POST['regis'])){
    $id=md5(uniqid());
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $level=$_POST['level'];
    $email=$_POST['email'];


    $input_query=mysqli_query($koneksi,"insert into user values ('$id','$username','$password','$level','$email')") or die 
    (mysqli_error($input_query));

    if($input_query){
        echo "
        <script>alert('Data berhasil diinput dan silahkan login')
            window.location.href='../login2.php'
        </script>";
    }else{
        echo 'tidak bisa login';
    }
}
?>