<?php
echo"
  <div style='margin-top: 20px; float:left; width: 230px; padding: 10px;'>
    <img src='img/hom.png' height='350'>
  </div>
  <div style='margin-top: 20px; float: left; width: 480px; margin-left: 30px;'>
    <p><h1>Selamat Datang, $_SESSION[user]!</h1></p>
    <p><h3>Homepage Bukutamuku</h3></p>
    <div style='background: #4CAF50; padding: 20px; width: 93%; color: #fff;'>Anda login sebagai  ' $_SESSION[user] '</div>
    <p>Site Map Bukutamuku bisa kamu akses :</p>

    <div class='lis'>
    <ul>
      <li><a href='#'><font color='#3486CA'>Homepage Bukutamuku</font></a></li>
      <li><a href='#'><font color='#3486CA'>Daftar Tamu Bukutamuku</font></a></li>
      <li><a href='#'><font color='#3486CA'>Form Data Tamu Bukutamuku</font></a></li>
    </ul>
    </div>
    <p>Tugas IT 2, Universitas Komputer Indonesia</p>
  </div>
";
?>
