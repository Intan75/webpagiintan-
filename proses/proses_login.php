<?php
    include '../koneksi/koneksi.php';


    if(isset($_POST['tambah'])){
        $username=$_POST['user'];
        $password=md5($_POST['pass']);

        // ini adalah query
        $login=mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

        // ini adalah pengecekan
        $cek=mysqli_num_rows($login);
        // menampilkan definisi data
        $data=mysqli_fetch_assoc($login);

        if ($cek>0){
            if($data['level']=="pembeli"){
                $_SESSION['username']=$data['username'];
                $_SESSION['level']=$data['level'];
                $_SESSION['status']='login';

                echo "<script>
                alert (window.location.href='../prosesdiskon.php');
                </script>";
            }
        }else{
            echo 'data gagal';
        }
    }
?>


<!-- if ($username=="admin"and$password=="admin123"){
                header ('location: proses_nilai.php');
            }elseif($username=="siswa"and $password=="siswa123"){
                header ('location: biodata.php');
            }else{
                echo "Login gagal"; -->