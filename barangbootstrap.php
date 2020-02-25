<?php
include 'header.php';
?>


    <div class="container">
    <form method="POST" action="proses/proses_diskon.php">
        <div class="form-group">
            <label for="barang">Nama barang</label>
            <input type="text" class="form-control col-sm-2" name="barang">
        </div>
        <div class="form-group">
            <label for="barang">Harga barang</label>
            <input type="number" class="form-control col-sm-2" name="harga">
        </div>
        <div class="form-group">
            <label for="barang">Kategori barang</label>
            <input type="text" class="form-control col-sm-2" name="kategori">
        </div>
        <div class="form-group">
            <label for="barang">Stok barang</label>
            <input type="number" class="form-control col-sm-2" name="stok">
        </div>
        <!-- <div class="form-group">
            <label for="diskon">Diskon</label>
            <input type="number" class="form-control col-sm-2" name="diskon">
        </div> -->
        <!-- <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" name="input" class="btn btn-secondary">Input</button>
    </form>
    </div>

<?php
include 'footer.php';
?>


    
<?php
    if(isset($_POST['input'])){
        $barang=$_POST['barang'];
        $diskon=$_POST['diskon'];
        $harga_minimal_diskon=400000;

        if($barang>=$harga_minimal_diskon){
            // harga - (harga * $diskon / 100)
            $harga_setelah_diskon=$barang - ($barang*$diskon/100);
            echo "Total harga $barang setelah mendapat diskon adalah Rp. $harga_setelah_diskon";
        }else{
            echo "harga $barang ";
        }
    }
?>
    
    
    