<?php
$user="intanayu";
$pass=123;
if($user=="intanayu"and$pass=="123"){
    echo "login berhasil";
}else {
    echo "login gagal";
}
?>

<br>
<br>
<br>
<?php
$username="siswa";
$password="siswa123";

if($username=="admin" and $password=="admin123"){
    echo "lari ke halaman admin";
}elseif ($username=="siswa" and $password=="siswa123"){
    echo "lari kehalaman siswa";
}else {
    echo "username dan password salah";
}

?>


<br>
<br>
<?php
$user="";
if (!isset($user)) {
    echo "variabel tidak ada/belum terbentuk";
}else {
    echo "variabel ada";
}
?>

