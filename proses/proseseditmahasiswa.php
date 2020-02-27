<?php
include'../koneksi/koneksi.php';

if(isset($_GET['update'])){
    $id=$_GET['id_mahasiswa'];
    $nama=$_GET['nama'];
    $nim=$_GET['nim'];
    $jurusan=$_GET['jurusan'];
    $matakuliah=$_GET['mata_kuliah'];
    $harian=$_GET['harian'];
    $quiz=$_GET['quis'];
    $uts=$_GET['uts'];
    $uas=$_GET['uas'];
    $hasil=($harian*0.1)+($quiz*0.15)+($uts*0.35)+($uas*0.4);

                if($hasil<=50){
                    $grade='E';
                }else if($hasil<=65){
                    $grade='D';
                }else if($hasil<=75){
                    $grade='C';
                }else if($hasil<=85){
                    $grade='B';
                }else if($hasil<=100 ||$hasil>100){
                    $grade='A';
                }

    $update =mysqli_query($koneksi,"UPDATE mahasiswa SET nim='$nim',nama_mahasiswa='$nama',jurusan='$jurusan',mata_kuliah='$matakuliah',nilai_harian='$harian',nilai_quis='$quiz',nilai_uts='$uts',nilai_uas='$uas',nilai_akhir='$hasil', grade='$grade' WHERE id_mahasiswa='$id'")
    or die(mysqli_error($update));
    
    if($update){
        echo'
            <script>alert("data berhasil diupdate");
            window.location.href="../prosesnilaibootstrap.php"
            </script>
        ';
    }else{
        echo'
        <script>alert("data gagal diupdate");
        window.location.href="../edit_mahasiswa.php"
        </script>
    ';
    }


}

?>