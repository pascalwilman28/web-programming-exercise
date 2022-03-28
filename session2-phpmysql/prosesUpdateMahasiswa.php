<?php
    include "config.php";

    if(isset($_POST['update'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $tgl_lahir = $_POST['tgl_lahir'];

        $sql = "UPDATE mahasiswa SET nama = '$nama', jurusan = '$jurusan', alamat = '$alamat', tanggal_lahir = '$tgl_lahir' WHERE nim = '$nim'";
        $query = mysqli_query($connection,$sql);

        if($query){
            echo "<script>alert('Data berhasil diupdate');</script>";
        }else{
            echo "<script>alert('Update gagal "; mysqli_error($connection); echo"');</script>";
        }

        echo "<script>window.location.replace('index.php');</script>";
    }
?>