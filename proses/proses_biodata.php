<?php

    include '../koneksi/koneksi.php';

    if(isset($_POST['input'])){
        $id_biodata=uniqid();
        $nama_saya=$_POST['nama'];
        $alamat_saya=$_POST['alamat'];
        $no_hp=$_POST['no_hp'];
        $email=$_POST['email'];
        $hobby1=(!empty($_POST['hobby1'])?$_POST['hobby1']:'');
        $hobby2=(!empty($_POST['hobby1'])?$_POST['hobby2']:'');
        $hobby3=(!empty($_POST['hobby1'])?$_POST['hobby3']:'');
        $tanggal_lahir=$_POST['tanggal_lahir'];
        $tempat_lahir=$_POST['tempat_lahir'];
        $jenis_kelamin=$_POST['jk'];
        $hobby=($hobby1.','.$hobby2.','.$hobby3);

        $nama_file=$_FILES['foto']['name'];

        $format=explode(".", $nama_file);
            $fileExtension = end($format);
            $nama_sementara=$_FILES['foto']['tmp_name'];
            $md5file = md5($nama_file) . "." . $fileExtension;
            

            $lokasi_upload= "../upload/"; 

            $fungsi_upload=move_uploaded_file($nama_sementara, $lokasi_upload.$md5file);
            

            $query=mysqli_query($koneksi,"INSERT INTO biodata VALUES('$id_biodata','$nama_saya','$alamat_saya','$no_hp','$email','$hobby','$tanggal_lahir','$tempat_lahir','$jenis_kelamin','$md5file')")or die(mysqli_error($query));

            if($query){

                echo'data biodata berhasil di masukkan';

            }else{
                echo'data gagal dimasukkan';
            }


    }

?>