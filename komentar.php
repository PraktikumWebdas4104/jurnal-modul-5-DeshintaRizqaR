<form action="" method="POST">
	<table>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><textarea name="komentar"></textarea></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value=""></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="email" value=""></td>
		</tr>
		<tr>
			<td><input type="submit" name="Daftar" value="Daftar"></td>
		</tr>
		</table>
	</form>

	<?php 
if (isset($_POST['kirim'])) {
	$komentar = $_POST['komentar'];

	if (str_word_count($komentar)<5) {
		echo "Nim salah harus 10 karakter";
	}else{
		echo str_word_count($komentar);
		
		
	}
	}
	 ?>
