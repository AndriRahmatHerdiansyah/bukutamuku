<?php
include 'koneksi.php';
if(isset($_GET['id_tamu'])){
	$id = $_GET['id_tamu'];
	$sql =mysql_query("delete from buku_tamu where id_tamu='$id'");
	if($sql){
		header("location:index.php#Daftar-Tamu");
	}else{
		echo "<div id='erno'>Maaf Data Tidak dapat di Hapus</div>";
	}
}
?>
