<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>
