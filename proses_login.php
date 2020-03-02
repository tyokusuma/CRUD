
<?php 
include "koneksi.php";


$username1 = $_POST['nama'];  

$password1 = $_POST['password'];

$sql = "SELECT * FROM login";   

$query = mysqli_query($koneksi, $sql);


while ($data = mysqli_fetch_array($query))

{

$admin = $data['username'];

$adminpass = $data['password'];


if (($username1 != $admin) || ($password1 != $adminpass))  
    {
        echo "salah";
    }
else 
    {
            echo "<meta http-equiv='refresh' content='1; url=lihat_data.php'>";
    }
}
?>