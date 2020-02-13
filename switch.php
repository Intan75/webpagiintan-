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
    $harian=0.1*90;
    $quis=0.15*80;
    $UAS=0.4*80;
    $UTS=0.35*85;
    $nilai="$harian"+"$quis"+"$UTS"+"$UAS";
    if($nilai<=50){
        echo "Grade yang diperoleh oleh $nama dengan nim $nim jurusan $jurusan dengan nilai $nilai adalah E";
    }elseif ($nilai<=65){
        echo "Grade yang diperoleh oleh $nama dengan nim $nim jurusan $jurusan dengan nilai $nilai adalah D";
    }elseif ($nilai<=72){
        echo "Grade yang diperoleh oleh $nama dengan nim $nim jurusan $jurusan dengan nilai $nilai adalah C";
    }elseif ($nilai<=83){
        echo "Grade yang diperoleh oleh $nama dengan nim $nim jurusan $jurusan dengan nilai $nilai adalah B";
    }elseif ($nilai<=100 || $nilai=100){
        echo "Grade yang diperoleh oleh $nama dengan nim $nim jurusan $jurusan dengan nilai $nilai adalah A";
    }else {
        echo "$nama dengan nim $nim jurusan $jurusan dinyatakan tidak lulus ";
    }
?>

<!-- cara lain -->
<br>
<br>
<?php
    $nim="1602110134";
    $nama='Intan ayu mulya pratiwi';
    $jurusan="Akuntansi";
    $harian=90;
    $quis=80;
    $UAS=80;
    $UTS=85;
    $nilai=($harian*10/100)+($quis*15/100)+($UTS*35/100)+($UAS*40/100);
    if($nilai<=50){
        echo "Grade yang diperoleh oleh $nama dengan nim $nim jurusan $jurusan dengan nilai $nilai adalah E";
    }elseif ($nilai<=65){
        echo "Grade yang diperoleh oleh $nama dengan nim $nim jurusan $jurusan dengan nilai $nilai adalah D";
    }elseif ($nilai<=72){
        echo "Grade yang diperoleh oleh $nama dengan nim $nim jurusan $jurusan dengan nilai $nilai adalah C";
    }elseif ($nilai<=83){
        echo "Grade yang diperoleh oleh $nama dengan nim $nim jurusan $jurusan dengan nilai $nilai adalah B";
    }elseif ($nilai<=100 || $nilai=100){
        echo "Grade yang diperoleh oleh $nama dengan nim $nim jurusan $jurusan dengan nilai $nilai adalah A";
    }else {
        echo "$nama dengan nim $nim jurusan $jurusan dinyatakan tidak lulus ";
    }
?>