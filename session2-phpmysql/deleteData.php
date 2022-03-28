<?php
    include "config.php";

    if(isset($_GET['id'])){
        $nim = base64_decode($_GET['id']);

        $sql = "DELETE FROM mahasiswa WHERE nim = '$nim'";
        $query = mysqli_query($connection,$sql);

        if($query){
            echo "<script>alert('Data berhasil dihapus');</script>";
        }else{
            echo "<script>alert('Delete gagal "; mysqli_error($connection); echo"');</script>";
        }

        echo "<script>window.location.replace('index.php');</script>";
    }
?>