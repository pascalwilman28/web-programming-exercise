<?php
    session_start();
    if(isset($_POST['save'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        // echo $username."-".$password; 
       
        header("location: login.php");
        
    }

?>