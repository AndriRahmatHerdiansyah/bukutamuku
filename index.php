<?php
	include"koneksi.php";
	ob_start();
	session_start();
	if(isset($_SESSION['user'])){
?>
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
					<?php include"form.php"; ?>
				</div>
			</div>
		</div>

		<div class='footer'>
			<center>Copyright @ 2017 by : <a href="" target="_blank">Andro Banana</a> All rights reserved.</center>
		</div>
	</div>
</body>
</html>
<?php }else{header("location:login.php");}?>
