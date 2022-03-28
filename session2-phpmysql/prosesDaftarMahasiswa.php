<?php
    include "config.php";

    if(isset($_POST['daftar'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $tgl_lahir = $_POST['tgl_lahir'];

        $sql = "INSERT INTO mahasiswa (nim,nama,jurusan,alamat,tanggal_lahir) VALUES ('$nim','$nama','$jurusan','$alamat','$tgl_lahir')";
        $query = mysqli_query($connection,$sql);

        if($query){
            echo "<script>alert('Data berhasil ditambahkan');</script>";
        }else{
            echo "<script>alert('Insert gagal "; mysqli_error($connection); echo"');</script>";
        }

        echo "<script>window.location.replace('index.php');</script>";
    }
?>