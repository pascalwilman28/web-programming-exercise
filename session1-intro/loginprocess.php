<?php
    session_start();

    if(isset($_POST['save'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == isset($_SESSION['username']) && $password == isset($_SESSION['password'])){
            echo "<script>alert('Selamat anda berhasil login');
            window.location.href='index.php';</script>";
        }else{
            echo $_SESSION['username']. " ". $_SESSION['password'];
            echo "<script>alert('Oops! Username atau Password anda salah');
            window.location.href='login.php';</script>";
        }
    }
?>