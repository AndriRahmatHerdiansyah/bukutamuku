<?php

// <div class='erno'>
// 			<div align='left'><h1>Nama tidak boleh kosong!</h1>
// 				Pengiriman email gagal! status laundry harus selesai dicuci!<br>
// 			</div>
// </div>
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
						<td colspan='2' >
							<center><input type='submit' class='submit' value='Input' name='button'></center>
						</td>
					</tr>
				</table>
			</form>
		</div>
			";


?>
