<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align="center" border="1">
        <tr>
            <td>nama</td>
            <td>alamat</td>
            <td>tempatlahir</td>
            <td>jurusan</td>
            <td colspan="3" align="center">Pilihan</td>
        </tr>


<?php 
include "koneksi.php";
$sql = "select *from mahasiswa";
$tampil = mysqli_query($koneksi,$sql);
while ($keluarin = mysqli_fetch_array($tampil)) {
    $id = $keluarin['id'];
    $nama =$keluarin['nama'];
    $alamat = $keluarin['alamat'];
    $tempatlahir = $keluarin['tempatlahir'];
    $jurusan=$keluarin['jurusan'];

?>
        <tr>
            <td><?php echo $nama; ?></td>
            <td><?php echo $alamat; ?></td>
            <td><?php echo $tempatlahir; ?></td>
            <td><?php echo $jurusan; ?></td>
            <td><a href="Update.php?<?php echo "nomor=$id" ?>">Update</a></td>
           
            <td><a href="Proses_Delete.php?<?php echo "no=$id"?>">Delete</a></td>

            <td><a href="Create.php">Create</a></td>


        </tr>
        <?php }?>
</table>
   
</body>
</html>