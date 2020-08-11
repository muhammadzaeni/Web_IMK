<?php
include 'config.php';
if(empty($_SESSION['login'])){
//jika masih ada session login alihkan ya
  header('Location: index.php');
  //jangan eksekusi script di bawah
  exit;
}
echo ' sudah di booking bapak '.$_SESSION['nama'].'Dengan Type Kamar'. $_POST['tipe'] ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Belajar PHP</title>
</head>
<body>
<h1>From Belajar PHP</h1>
<form method="POST" action="berhasil.php" enctype="multipart/form-data">
<table border="0">
	
	
	<tr> 
		<td>Name</td>
		<td>:</td>
		<td> </td>
	</tr>
		<td> Nama </td> 
		<td>:</td> 
		<td><input type="text" name="nama"></td>
	</tr>
	</tr>
	<tr>
		<td> Jurusan </td> 
		<td>:</td>
		<td> 
		<SELECT type="text" name="jurusan">
			<option value=""> Pilih Jurusan </option>
			<option value="Informatika">Informatika</option>
			<option value="Informatika">Industri</option>
			<option value="Informatika">Sipil</option>
		</SELECT>
		</td>
	</tr>
	</br>
	<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<input type="radio" name="jk" value="pria">Pria
				<input type="radio" name="jk" value="wanita">Wanita
			</td>

	</tr>
	<tr>
			<td>Hobyy</td>
			<td>:</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Menggambar">Menggambar
				<input type="checkbox" name="hobi[]" value="Menulis">Menulis
				<input type="checkbox" name="hobi[]" value="Main Game">Main Game
			</td>

	</tr>
	<tr>
			<td>Upload</td>
			<td>:</td>
			<td>
				<input type="file" name="foto">
				

			</td>

	</tr>
	<tr>
		<td></td>
		<td></td>

	</tr>

	</table>
	</form>
</body>
</html>

