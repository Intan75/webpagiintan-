<?php
//menghitung penjualan bersih
    $jual=100000;
    $potongan=0.1;
    $net=$jual-($jual*$potongan);
    echo "penjualan bersih= Rp $net,00";
?>


<br>
<br>
<?php
// penggunaan operator modulus/sisa hasil bagi
$hal=11;
if($hal%2==0)
echo 'Halaman genap';
elseif($hal%3==2)
echo 'halaman utama';
else
echo 'halaman ganjil';
?>

<!-- operator -->
<br>
<?php
$a=10;
$b=5;
$c=7 ;
$d=8;

$kali=($a*$d);
$tambah=($a+$c);
$kurang=($b-$d);
$bagi=($a/$b);
$hasil=$kurang;

if($hasil==80){
    echo "nilai anda adalah $kali";
}elseif($hasil==17){
    echo "nilai anda adalah $tambah";
}elseif($hasil==-3){
    echo "nilai anda adalah $kurang";
}elseif($hasil==2){
    echo "nilai anda adalah $bagi";
}else{
    echo "nilai yang anda masukkan tidak tersedia";
}

?>


<!-- menentukan nilai biodata  -->
<br>
<br>
<?php
$nim="1602110134";
$nama='Intan ayu mulya pratiwi';
$umur="21 Tahun";
$nilai=90;
$status=TRUE;

echo "nim :".$nim."<br>";
echo "nama:$nama <br>";
print "umur: $umur <br>";
print "umur: ".$umur; print "<br>";
printf ("nilai : %.1f<br>", $nilai);
if($status)
echo "status: aktif";
else
echo "status : tidak aktif";
?>

<!-- membuat define variable dan nilai -->
<br>
<br>
<?php
define ("nama", "Intan ayu mulya pratiwi");
define ("nilai",90);

//nama="intan";// akan menyebabkan eror
echo "nama:".nama;
echo "<br> nilai:". nilai;

?>

<br>
<br>
<?php
$gaji=1000000;
$pajak=0.025;
$thp=$gaji-($gaji*$pajak);
echo "Gaji sebelum pajak=Rp. $gaji <br>";
echo "gaji yang dibawa pulang=Rp. $thp";
?>


<!-- operator logika dan perbandingan dalam php -->
<br>
<br>
<br>
<?php
    $a=5;
    $b=4;

    echo "$a==$b:". ($a==$b);
    echo "<br>$a !=$b:". ($a!=$b);
    echo "<br>$a > $b:". ($a>$b);
    echo "<br<$a < $b:". ($a<$b);
    echo "<br> ($a!=$b) and ($a>$b):" . (($a!=$b) and ($a>$b));
    echo "<br> ($a!=$b) || ($a>$b):" . (($a!=$b) and ($a>$b));

?>
<!-- percabangan -->
<br>
<br>
<?php
    $hari= "minggu";
    if($hari=="senin"){
        echo "upacara bendera";
    }elseif($hari=="selasa"){
        echo "praktikum";
    }elseif ($hari=="rabu"){
        echo "latihan";
    }elseif ($hari=="kamis"){
        echo "makan";
    }elseif ($hari=="jumat"){
        echo "belajar";
    }elseif ($hari=="sabtu"){
        echo "bertamasya";
    }elseif ($hari=="minggu"){
        echo "berlibur keluar kota";
    }else{
        echo "tidak ada acara";
    }
?>

<br>
<br>
<?php
    $nim="1602110134";
    $nama='Intan ayu mulya pratiwi';
    $jurusan="Akuntansi";
    $nilai=90;

    if($nilai<=50){
        echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah E";
    }elseif ($nilai<=65){
        echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah D";
    }elseif ($nilai<=72){
        echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah C";
    }elseif ($nilai<=83){
        echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah B";
    }elseif ($nilai<=100 || $nilai=100){
        echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah A";
    }else {
        echo "$nama dengan $nim dan $jurusan dinyatakan tidak lulus ";
    }
?>

<br>
<br>
<?php
    $nama="intan ayu mulya pratiwi";
    $alamat="asrama tni-ad kuta alam";
    $nohp="085281685155";

    $hasil="";
    if($hasil=="intan ayu mulya pratiwi"){
        echo($nama);
    }elseif($hasil=="asrama tni-ad kuta alam"){
        echo($alamat);
    }else{
        echo($nohp);
    }
?>

<br>
<?php
$a=10;
$b=20;
function mytest() {
    global $a;
    global $b;
    echo ($a)+($b);
}
mytest();
?>

<br>
<?php
    global $a;
    $a="abc";
    global $b;
    $b="intan ayu mulya";

    //adalah sama dengan menggunakan perintah:
    echo $GLOBALS["a"]="abc <br>";
    echo $GLOBALS["b"]="intan ayu mulya";
?>