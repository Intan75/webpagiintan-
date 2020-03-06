<?php
    include '../koneksi/koneksi.php';


if (isset ($_POST ['input'])){
    $id=uniqid();
    $nama_barang=$_POST['barang'];
    $harga_barang=$_POST['harga'];
    $stok_barang=$_POST['stok'];
    $kategori_barang=$_POST['kategori'];

    $diskon=mysqli_query ($koneksi, "insert into stok values ('$id','$nama_barang','$harga_barang','$stok_barang','$kategori_barang')")or die 
    (mysqli_error($diskon));

        if($diskon){
            echo "
            <script>alert ('Data berhasil diinput')
            window.location.href='../prosesdiskon.php'
            </script>";
        }else{
            echo 'Data gagal diinput';
        }

}
?>