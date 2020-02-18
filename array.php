<?php
include 'header.php';
?>
<form action="" method="POST">
    <input type="text" name="mangga">
    <input type="submit" name="tambah" value="tampil">


</form>
<?php
    if(isset($_POST['tambah'])){
        $buah=$_POST['mangga'];

        $arraybuah=[
            "mangga",
            "jambu",
            "kelapa",
        ];
        if($buah=$arraybuah[2]){
            echo"$arraybuah[2]";
        }
    }
?>

<!-- Contoh array  -->
<br>
<?php
$arrBuah=array("mangga", "apel", "pisang", "jeruk");
echo $arrBuah[0];//mangga
echo $arrBuah[3];//jeruk

$arrwarna=array();
$arrwarna[]="merah";
$arrwarna[]="biru";
$arrwarna[]="hijau";
$arrwarna[]="putih";
echo $arrwarna[0];//merah
echo $arrwarna[2];//hijau
?>



<!-- metode pertama -->
<?php
$buah=array ("mangga", "kelapa", "jambu", "apel");
echo "<br> $buah[2]";

// metode kedua
$buahaja=[
    "mangga",
    "kelapa",
    "jambu",
    "apel"
];
echo "<br> $buahaja[2]";

// metode ketiga
$buah3=array();
$buah3[]="mangga";
$buah3[]="kelapa";
$buah3[]="jambu";
$buah3[]="apel";

echo "<br> $buah3[0]";
?>

<?php
include 'footer.php';
?>