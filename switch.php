<?php
$day= date ("D");
switch ("sat") {
    case 'sun':$hari= "Minggu";break;
    case 'mon':$hari= "Senin";break;
    case 'tue':$hari= "Selasa";break;
    case 'wed':$hari= "Rabu";break;
    case 'thu':$hari= "Kamis";break;
    case 'fri':$hari= "Jumat";break;
    case 'sat':$hari= "Sabtu";break;
    default :$hari= "kiamat";
}echo "hari ini hari <b>$hari</b>";

?>

<!-- memeriksa tahun kabisat -->
<br>
<?php
$tahun=date ("Y");
$kabisat=($tahun%4==0) ? "KABISAT": "BUKAN KABISAT";
echo "tahun <b>$tahun</b> $kabisat";

?>

<br>
<?php
    $nim="1602110134";
    $nama='Intan ayu mulya pratiwi';
    $jurusan="Akuntansi";
    $harian='0.1*90';
    $quis='0.15';
    $UAS='0.4';
    $UTS='0.35';
    $nilai=90;
    $nilai="$harian"+"$quis"+"$UTS"+"$UAS";
    

?>