|<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "11rplb";
$koneksi = mysqli_connect($host, $user, $pass, $db);
if(mysqli_connect_errno()){
    echo "Gagal Terhubung ".mysql_connect_error();
}
?>