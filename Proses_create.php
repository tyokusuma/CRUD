<?php 
include "koneksi.php";

$jurusan = $_POST['Jurusan'];
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$tempat = $_POST['tempatlahir'];

if (empty($nama) || empty($alamat) || empty(tempat) || empty($jurusan)) {
    echo "tidak ada yang boleh kosong
    <meta http-equiv='refresh' content='1;url=lihat_data.php'>";
}else {
    $sql = "insert into mahasiswa (nama,alamat,tempatlahir,jurusan) values ('$nama','$alamat','$tempat','$jurusan')";
    $query = mysqli_query($koneksi,$sql);

    if ($query) {
        echo "
        Berhasil
        <meta http-equiv='refresh' content='1;url=lihat_data.php'>";
    }else {
        echo "cek kembali form anda
        <meta http-equiv='refresh' content='1;url=lihat_data.php'>";
    }
}


?>