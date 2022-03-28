<?php 
   include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database</title>
</head>
<body>
    <table border="1" cellpadding ="10">
        <tr bgcolor="yellow">
            <td width="20%">NIM</td>
            <td width="20%">Nama Lengkap</td>
            <td width="20%">Jurusan</td>
            <td width="20%">Alamat</td>
            <td width="20%">Tanggal Lahir</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php 
            $sql = "SELECT * FROM mahasiswa";
            $query = mysqli_query($connection,$sql);

            while($row = mysqli_fetch_array($query)){
                $nim = $row['nim'];
                $nama = $row['nama'];
                $jurusan = $row['jurusan'];
                $alamat = $row['alamat'];
                $tgl_lahir = $row['tanggal_lahir'];
        ?>
        <tr>
            <td width="20%"><?php echo $nim;?></td>
            <td width="20%"><?php echo $nama;?></td>
            <td width="20%"><?php echo $jurusan;?></td>
            <td width="20%"><?php echo $alamat;?></td>
            <td width="20%"><?php echo $tgl_lahir;?></td>
            <td><a href="editData.php?id=<?php echo base64_encode($nim);?>">Edit</a></td>
            <td><a href="deleteData.php?id=<?php echo base64_encode($nim);?>">Delete</a></td>
        </tr>
        <?php };?>
    </table>
    
    <hr>
    <form action="prosesDaftarMahasiswa.php" method="post">
            NIM : <input type="text" name="nim" maxlength="11"><p>
            Nama : <input type="text" name="nama"><p>
            Jurusan : <select name="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Bisnis Manajemen">Bisnis Manajemen</option>
            </select><p>
            Alamat : <textarea name="alamat" cols="30" rows="10"></textarea><p>
            Tanggal Lahir : <input type="date" name="tgl_lahir"><p>
            <button type="submit" name="daftar">Daftar</button>
    </form>
</body>
</html>