<?php 
include "koneksi.php";
$no = $_GET['no'];
$sql = "delete from mahasiswa where id = '$no'";
$query = mysqli_query($koneksi,$sql);

?>