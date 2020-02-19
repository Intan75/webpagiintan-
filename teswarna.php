<?php
include 'header.php';
?>

<form action="" method="POST">

    <input type="text" name="color">
    <input type="submit" name="tambah" value="tampil">
</form>

<?php
if(isset($_POST['tambah'])){
    $color=$_POST['color'];

    $arraycolor=[
        "merah",
        "hijau",
        "kuning"
    ];

    if($color==$arraycolor[0]){
        echo "<h1 style='color: red'>$color</h1>";
    }elseif($color==$arraycolor[1]){
        echo "<h1 style='color: green'>$color</h1>";
    }elseif($color==$arraycolor[2]){
        echo "<h1 style='color: yellow'>$color</h1>";
    }else {
        echo "<h1 style='color: blue'>$color</h1>";
    }
}
?>

<?php
include 'footer.php';
?>