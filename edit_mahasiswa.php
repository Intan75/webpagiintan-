<?php
include 'header.php';
?>

<?php
include 'koneksi/koneksi.php';


$id= $_GET['id_mahasiswa'];

$show=mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'") or die (mysqli_error($show));

if(mysqli_num_rows($show)==0){

    echo'
        <script>window.history.back();</script>
    ';
}else{
    $data=mysqli_fetch_array($show);
}

?>


<div class="container">
<form method="GET" action="proses/proseseditmahasiswa.php">
    <input type="hidden" name="id_mahasiswa" value="<?php echo $data['id_mahasiswa']?>">
    <!-- <div class="form-group">
        <label for="id">Id</label>
        <input type="number" class="form-control col-sm-2" name="id">
    </div> -->

    <div class="form-group">
        <label for="NIM">NIM</label>
        <input type="number" class="form-control col-sm-3" name="nim" value="<?php echo $data['nim']?>">
    </div>
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" class="form-control col-sm-3" name="nama" value="<?php echo $data['nama_mahasiswa']?>">
    </div>
    <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" class="form-control col-sm-3" name="jurusan"value="<?php echo $data['jurusan']?>" >
    </div>
    <div class="form-group">
        <label for="matakuliah">Mata kuliah</label>
        <input type="text" class="form-control col-sm-3" name="mata_kuliah" value="<?php echo $data['mata_kuliah']?>">
    </div>
    <div class="form-group">
        <label for="harian">Nilai Harian</label>
        <input type="number" class="form-control col-sm-3" name="harian" value="<?php echo $data['nilai_harian']?>">
    </div>
    <div class="form-group">
        <label for="quis">Nilai quis</label>
        <input type="number" class="form-control col-sm-3" name="quis" value="<?php echo $data['nilai_quis']?>">
    </div>
    <div class="form-group">
        <label for="uts">Nilai UTS</label>
        <input type="number" class="form-control col-sm-3" name="uts" value="<?php echo $data['nilai_uts']?>">
    </div>
    <div class="form-group">
        <label for="uas">Nilai UAS</label>
        <input type="text" class="form-control col-sm-3" name="uas" value="<?php echo $data['nilai_uas']?>">
    </div>
    <button type="submit" name="update" class="btn btn-success" value="update">Input</button>
</form>
</div>

<?php
include 'footer.php';
?>