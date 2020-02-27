<?php
include '../koneksi/koneksi.php';

if (isset ($_POST['input'])){
    $id=md5(uniqid());
    $nim=$_POST['nim'];                                                                                                                                                                                                                             
    $nama_mahasiswa=$_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $matakuliah=$_POST['mata_kuliah'];
    $nilai_harian=$_POST['harian'];
    $nilai_quis=$_POST['quis'];
    $nilai_uts=$_POST['uts'];
    $nilai_uas=$_POST['uas'];
    $nilai_akhir=($nilai_harian*10/100)+($nilai_quis*15/100)+($nilai_uts*35/100)+($nilai_uas*40/100);

    if($nilai_akhir<=50){
        $grade='E';
    }elseif ($nilai_akhir<=65){
        $grade='D';
    }elseif ($nilai_akhir<=75){
        $grade='C';
    }elseif ($nilai_akhir<=85){
        $grade='B';
    }elseif ($nilai_akhir<=100 || $nilai_akhir>100){
        $grade='A';
    }


    $query_nilai=mysqli_query($koneksi,"insert into mahasiswa values ('$id','$nim','$nama_mahasiswa','$jurusan','$matakuliah','$nilai_harian','$nilai_quis','$nilai_uts','$nilai_uas','$nilai_akhir','$grade')") or die 
    (mysqli_error($query_nilai));

    if($query_nilai){
        echo "
        <script>alert('Nilai berhasil diinput')
            window.location.href='../prosesnilaibootstrap.php'
        </script>";
    }else{
        echo "
        <script>alert('Nilai gagal diinput')
            window.location.href='../prosesnilaibootstrap.php'
        </script>";
    }
}
?>