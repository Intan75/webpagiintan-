<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>barang</title>
</head>
<body>
    <form action="prosesbarang.php" method="POST">
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="namabarang">
        <label for="harga_barang">Harga barang:</label>
        <input type="number" name="hargabarang">
        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah">
        <input type="submit" name="submit">    
    </form>
</body>
</html>