<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "universitas";

    $connection = mysqli_connect($server,$username,$password,$database);

    if($connection){
        // echo "koneksi berhasil";
    }else{
        echo "koneksi gagal ". mysqli_connect_error();

    }
?>