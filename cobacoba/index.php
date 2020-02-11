<?php
//menghitung penjualan bersih
    $jual=100000;
    $potongan=0.1;
    $net=$jual-($jual*$potongan);
    echo "penjualan bersih= Rp $net,00";
?>


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
}
?>