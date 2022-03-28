<?php
    if(isset($_POST['upload'])){
        // print_r($_FILES);
        // . concat di php
        $filename = $_FILES['file']['name'];
        $tempname = $_FILES['file']['tmp_name'];

        $dirdest = "upload_file/";

        $upload = move_uploaded_file($tempname, $dirdest.$filename);

        if($upload){
            echo "File berhasil terupload";
            echo "<a href='". $dirdest.$filename."'>".$filename."</a>";
        }else{
            echo "Gagal Upload";
        }
    }
?>