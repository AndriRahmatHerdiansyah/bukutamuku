<html>
<head>
	<title>.:: Bukutamuku ::.</title>
	<link rel="shorcut icon" href="img/icon.png">
	<link href='style/skin.css' rel='stylesheet' type='text/css'>
	<script src="jquery-1.9.1.js"></script>
	<script src="jquery-ui.js"></script>
	<script>
	    $(function() {
	    $( "#tabsi" ).tabs();
	    });
	</script>
</head>

<body>
	<div class="logout">
		<a href="logout.php"><img src='img/logout.png' width='30' height='30'></a>
	</div>
	<?php include"koneksi.php";
	ob_start();
	?>
	<div class='container'>
		<div class='header'>
			<img src='img/logo.png' height="90px">
		</div>
		<div class='content'>
			<div id="tabsi">
				<ul>
					<li><a href="#Beranda">Beranda</a></li>
					<li><a href="#Daftar-Tamu">Daftar Tamu</a></li>
					<li><a href="#Form-Buku-Tamu">Form Buku Tamu</a></li>
				</ul>
				<!-- Tab Link -->
				<div  id="Beranda">
					<?php include"profil.php";?>
				</div>
				<div id="Daftar-Tamu">
					<?php include"data.php";?>
				</div>
<div id="Form-Buku-Tamu">
<?php
include"koneksi.php";

function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$nama   = antiinjection($_POST['nama']);
$jenis_kelamin   = antiinjection($_POST['jenis_kelamin']);
$email   = antiinjection($_POST['email']);
$telefon   = antiinjection($_POST['telefon']);
$pesan   = antiinjection($_POST['pesan']);

if(strlen($nama)<1)
{
echo"
<div class='erno'>
<center>Nama Tidak Boleh Kosong<br>
<a class='none' href='index.php#Form-Buku-Tamu'></br>
<div class='ret'>
	Ulangi
</div>
</center>
</div>
";
}
else if(strlen($email)<1)
{
echo"
<div class='erno'>
<center>Email Tidak Boleh Kosong<br>
<a class='none' href='index.php#Form-Buku-Tamu'></br>
<div class='ret'>
	Ulangi
</div>
</center>
</div>
";
}
else if(strlen($telefon)<1 || !is_numeric($telefon))
{
echo"
<div class='erno'>
<center>Nomor HP Tidak Boleh Kosong dan Harus Angka!<br>
<a class='none' href='index.php#Form-Buku-Tamu'></br>
<div class='ret'>
	Ulangi
</div>
</center>
</div>
";
}
else{
$sqlSimpan="INSERT INTO buku_tamu (nama,jenis_kelamin,email,telefon,pesan)
                            VALUES('$nama','$jenis_kelamin','$email','$telefon','$pesan')";

mysql_query($sqlSimpan)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php#Daftar-Tamu');
}

echo"

<div style='background:#eee; width: 95%; margin: 10px auto; border: 1px solid #dcdcdc; padding: 10px; border-radius: 10px 10px 10px 10px;'>
<form method='post' action='input.php#Form-Buku-Tamu'>
				<table align='center' border='0'>
					<tr>
						<td>
							Nama Tamu <font color='red'>*</font>
						</td>
						<td>
							<input type='text' name='nama'>
						</td>
					</tr>
					<tr>
						<td valign='top'>
							Jenis Kelamin <font color='red'>*</font>
						</td>
						<td>
							<select  class=select name='jenis_kelamin' width=20>
								<option>Laki-laki</option>
								<option>Perempuan</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							Email <font color='red'>*</font>
						</td>
						<td>
							<input type='email' name='email'>
						</td>
					<tr>
					<tr>
						<td>
							Nomor HP <font color='red'>*</font>
						</td>
						<td>
							<input type='text' name='telefon'>
						</td>
					<tr>
					</tr>
						<td valign='top'>
							Pesan
						</td>
						<td>
							<textarea name='pesan' style='width: 100%; height: 80px;'></textarea>
						</td>
					</tr>
					<tr>
						<td colspan='2' align='right'>
							<input type='submit' class='submit' value='Input' name='button'>
						</td>
					</tr>
				</table>
			</form>
		</div>
			";
?>

</div>
</div>

		</div>
		<div class='footer'>
			<center>Copyright @ 2017 by : <a href="" target="_blank">Andro Banana</a> All rights reserved.</center>
		</div>
	</div>
	</body>
</html>
