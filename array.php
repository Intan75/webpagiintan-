<?php
include 'header.php';
?>



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

<?php
include 'footer.php';
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


?>