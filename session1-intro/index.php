<?php 

    //Variabel
    // $a = 10;
    // $b = 20;
    // $c = 10;
    // $total = $a + $b;
    // echo $total;
    // echo "<br>Hello Word<br>";

    // //Condition
    // if($a === $c){
    //     echo "true";
    // }else{
    //     echo "false";
    // }

    // //Date Time
    // echo "<br>";
    // date_default_timezone_set("Asia/Bangkok");
    // $today = date("D, d-m-Y | H:i:s");
    // echo $today;

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['username']) == NULL){?>
        <h1>Helo Selamat Datang di website</h1>
        <br>
        <a href="login.php">Login Page</a> | 
        <a href="register.php">Register</a>
    <?php
        }else{?>
        <h1>Helo Selamat Datang di website <?php echo $_SESSION['username'];?> </h1>
        <a href="logout.php">Logout</a> | 
    <?php }
    ?>
    
    <form action="fileupload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" value="Upload" name="upload">
    </form>
</body>
</html>
