<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php 
include "koneksi.php";
$id = $_GET['nomor'];
$mysql = "select *from mahasiswa where id = '$id'";
$query = mysqli_query($koneksi,$mysql);
while ($update = mysqli_fetch_array($query)) {
    $no = $update['id'];
    $nama = $update['nama'];
    $alamat = $update['alamat'];
    $tempat = $update['tempatlahir'];
    $jurusan = $update['jurusan'];
}

?>
    <table align="center">
    <form action="Proses_update.php" method="post">
    <tr>
        <td>
            <input type="text" name="helo" id="" value="<?php echo $id;?>">
        </td>
    </tr>
    <tr>
        <td>
             Nama
        </td>
        <td>
            <input type="text" name="Nama" id="" value="<?php echo $nama ?>"><br>
        </td>
    </tr>
    <tr>
        <td>
            Alamat
       </td>
    <td>
        <input type="text" name="Alamat" value="<?php echo $alamat ?>"><br>
    </td>

    </tr>
    <tr>
        <td>
            tempat lahir
       </td>
    <td>
        <input type="text" name="tempatlahir" value="<?php echo $tempat ?>"><br>
    </td>

    </tr>
    <tr>
        <td>
            Jurusan
       </td>
    <td>
        <input type="text" name="Jurusan" value="<?php echo $jurusan ?>"><br>
    </td>

    </tr>
    <tr>
    <td colspan="2">
    <button style="color :Blue;width:200px ">Kirim Data</button>

    </td>

    </tr>
    </form>
    </table>
    
</body>
</html>