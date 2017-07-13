<html>
<title></title>
<head></head>
<body>
<?php
$sql=mysql_query("SELECT * FROM buku_tamu order by id_tamu DESC");
	$jumlah = mysql_num_rows($sql);
	if ($jumlah > 0){
			echo "
			<div id='popup'>
				<div class='window'>

						<center>Data berhasil ditambahkan
						<div style='float:right;'><a href='#popup' class='close-button' title='Close'><font color='#3C763D'><b>X</b></font></a></div> </center>

				</div>
			</div>
			";


	while ($r=mysql_fetch_array($sql)){
	echo"
	<div style='background:#eee; width: 95%; margin: 10px auto; border: 1px solid #dcdcdc; padding: 10px; border-radius: 10px 10px 10px 10px;'>
	<div class=data>
	<div style='float:right; margin-bottom:10px;'>
		<a href='hapus.php?id_tamu=$r[id_tamu]'><img src='img/rubbish.png' height='20px''/></a>
	</div>
	<table border=1>
	<tr>
		<td width=200px>
			Nama
		</td>
		<td widt100px>:</td>
		<td>
			$r[nama]
		</td>
	</tr>
	<tr>
		<td >
			Jenis Kelamin
		</td>
		<td width='10px'>:</td>
		<td>
			$r[jenis_kelamin]
		</td>
	</tr>
	<tr>
		<td >
			Email
		</td>
		<td width='10px'>:</td>
		<td>
			$r[email]
		</td>
	</tr>
	<tr>
		<td >
			Nomor HP
		</td>
		<td width='10px'>:</td>
		<td>
			$r[telefon]
		</td>
	</tr>
	<tr>
		<td >
			Pesan
		</td>
		<td width='10px'>:</td>
		<td colspan=2>
			$r[pesan]
		</td>
	</tr>
	</table>
	</div>
	</div>";
	}
	}
	else{
    echo "
	<table  align='center'>
		<tr>
			<td class='td' align='center'>
				<b>BELUM ADA TAMU YANG MASUK.</b>
			</td>
		</tr>
	</table>";
	}

?>
</body>
</html>
