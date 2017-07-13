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
  $id = $_GET['id_tamu'];
  $sql=mysql_query("SELECT * FROM buku_tamu where id_tamu='".$id."'");
	?>
	<div class='container'>
		<div class='header'>
			<img src='img/logo.png' height="90px">
		</div>
		<div class='content'>
      <div style='
        background:#F2DEDE;
        color:#A94442;
        border:1px solid #EBCCD1;
        padding:10px;
        text-align:center;
        font-size:13;
        width:95%;
        margin: 10px auto;'>
        <h2>Data akan dihapus!</h2>
      </div>
      <?php
      while ($r=mysql_fetch_array($sql)){
      echo "<div style='background:#eee; width: 95%; margin: 10px auto; border: 1px solid #dcdcdc; padding: 10px; border-radius: 10px 10px 10px 10px;'>
    	<div class=data>
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
    echo "
    <center><a href='hapus_act.php?id_tamu=$id'><input type='button' class='button' value='Hapus' name='button'></a></center>
    ";
      ?>

      &nbsp;
		</div>

		<div class='footer'>
			<center>Copyright @ 2017 by : <a href="" target="_blank">Andro Banana</a> All rights reserved.</center>
		</div>
	</div>
</body>
</html>
