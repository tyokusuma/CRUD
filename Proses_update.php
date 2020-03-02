<?php 

include "koneksi.php";
$nomor = $_POST['helo'];
echo $nomor;
$nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$tempat = $_POST['tempatlahir'];
$jurusan = $_POST['Jurusan'];

// $sql = "Update mahasiswa set nama = '$nama', alamat = '$Alamat', tempatlahir = '$tempat', jurusan ='$jurusan' where id = '$nomor' ";
// $query = mysqli_query($koneksi,$sql);

// if ($query) {
//     echo "Berhasil Update data
//     <meta http-equiv='refresh' content='1;url=lihat_data.php'>";
// }else {
//     echo "coba lagi
//     <meta http-equiv='refresh' content='1;url=Update.php'>";
// }

?>