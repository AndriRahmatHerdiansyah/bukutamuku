<html>
<head>
  <title>.:: Bukutamuku ::.</title>
	<link rel="shorcut icon" href="img/icon.png">
  <link href='style/skin_login.css' rel='stylesheet' type='text/css'>
</head>
<body bgcolor='#DBD4CA'>
  <div id='awak'>
  <?php
  define("_CEK",1);
  include "koneksi.php";
  if(isset($_POST['login'])){
    $namabalad=$_POST['user'];
    $passbalad=$_POST['pass'];

    if($namabalad==''){
      echo"<div class='erno'>Silahkan masukan username & password anda!</div>";
    } else if($passbalad==''){
      echo"<div class='erno'>password tidak boleh kosong!</div>";
    } else{
    //* cek username, password dan level akses *//
    	$sql=mysql_query("SELECT * FROM admin where username='$namabalad' AND password='$passbalad'");
    		$num=mysql_num_rows($sql);
    		if($num==0){
          echo"<div class='erno'>periksa lagi username dan password anda!</div>";
        } else{
  				session_start();
  				while ($result = mysql_fetch_array ($sql)) {
  					$_SESSION['timestamp']=time();
  					$_SESSION['admin']=true;
  					$_SESSION['namabalad']=$namabalad;
  					$_SESSION['id']=$result['Id'];
  					$_SESSION['user']=$result['username'];
  					$_SESSION['level']=$result['TypeUser'];
  					$id=$_SESSION['id'];
            header("Location: index.php");
  				}
  			}
    }
		echo"

		<div class='wrap'>
			<div class='head' >
        <img src='img/logo.png' height='60px'>
      </div>
					<div class='form'></br>
						<form action='login.php' method='post'>
							<div class='group'><img src='img/user.png' width=20 height=20><input type='text' name='user' placeholder='Username' /></div>
							<div class='group'><img src='img/lock.png' width=20 height=20><input type='password' name='pass' placeholder='Password'/></div>
							<input type='submit' value='Login' name='login'/></form>
					</div>
				<div class='footer'>Develop by Andro Banana</div>
			</div>
  	";
  }else{
    echo"

			<div class='wrap'>
				<div class='head' >
          <img src='img/logo.png' height='60px'>
        </div>
					<div class='form'></br>
						<form action='login.php' method='post'>
							<div class='group' ><img src='img/user.png' width=20 height=20><input type='text' name='user' placeholder='Username' /></div>
							<div class='group'><img src='img/lock.png' width=20 height=20><input type='password' name='pass' placeholder='Password'/></div>
							<input type='submit' value='Login' name='login'/>
						</form>

					</div>
				<div class='footer'>Develop by Andro Banana</div>
			</div>
		";
  }
  ?>
  </div>
</body>
</html>
