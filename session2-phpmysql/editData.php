<?php 
    include "config.php";

    $iddata = $_GET['id'];
    $sql = "SELECT * FROM mahasiswa WHERE nim = '$iddata'";
    $query = mysqli_query($connection,$sql);

    $row = mysqli_fetch_array($query);
    $nim = $row['nim'];
    $nama = $row['nama'];
    $jurusan = $row['jurusan'];
    $alamat = $row['alamat'];
    $tgl_lahir = $row['tanggal_lahir'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
<hr>
    <form action="prosesUpdateMahasiswa.php" method="post">
            NIM : <input type="text" name="nim" maxlength="11" value="<?php echo $nim;?>" readonly><p>
            Nama : <input type="text" name="nama" value="<?php echo $nama;?>"><p>
            Jurusan : <select name="jurusan">
                <option value="<?php echo $jurusan;?>">--<?php echo $jurusan;?>--</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Bisnis Manajemen">Bisnis Manajemen</option>
            </select><p>
            Alamat : <textarea name="alamat" cols="30" rows="10"><?php echo $alamat;?></textarea><p>
            Tanggal Lahir : <input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir;?>"><p>
            <button type="submit" name="update">Update</button>
    </form>
</body>
</html>