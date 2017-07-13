<?php
$server = "ap-cdbr-azure-southeast-b.cloudapp.net";
$username = "b2e66cc20418ca";
$password = "4f5fbb4a";
$database = "acsm_363d81adf7ff2e8";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
