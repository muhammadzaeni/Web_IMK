<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'Admin'); //username
define('DB_PASSWORD', 'admin');
define('DB_DATABASE', 'tugas'); //database

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());

//membuat table database
$sql = "CREATE TABLE daftar (id int(11) NOT NULL AUTO_INCREMENT,nama VARCHAR(255) NOT NULL,kelamin VARCHAR(20) NOT NULL,ttl VARCHAR(100) NOT NULL,agama VARCHAR(20) NOT NULL,telepon VARCHAR(20) NOT NULL,email VARCHAR(100) NOT NULL,sandi VARCHAR(100) NOT NULL,PRIMARY KEY (id));";
mysqli_query($conn,$sql);
$sql1 = "CREATE TABLE kamar (id int(100) NOT NULL,atasnama VARCHAR(225) NOT NULL,namakamar VARCHAR(255) NOT NULL,jeniskamar VARCHAR(100) NOT NULL,tipekamar VARCHAR(100) NOT NULL,cekin VARCHAR(20) NOT NULL,cekout VARCHAR(20) NOT NULL,tanggalpesan VARCHAR(20) NOT NULL);";
mysqli_query($conn,$sql1);

function daftar($nama,$kelamin,$ttl,$agama,$telepon,$email,$Password){
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
$sql = "INSERT INTO daftar (nama,kelamin,ttl,agama,telepon,email,Password) VALUES ('$nama','$kelamin','$ttl','$agama','telepon','$email','$Password')";
$hasil = mysqli_query($conn,$sql);
if($hasil){
	return true;
}else{
	return false;
}
mysqli_close($conn);
}

function kamar($uid,$atasnama,$namakamar,$jeniskamar,$tipekamar,$cekin,$cekout){
$tanggalpesan = time();
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
$sql = "INSERT INTO kamar (id,atasnama,namakamar,jeniskamar,tipekamar,cekin,cekout,tanggalpesan) VALUES ('$uid','$atasnama','$namakamar','$jeniskamar','$tipekamar','$cekin','$cekout','$tanggalpesan')";
$hasil = mysqli_query($conn,$sql);
if($hasil){
	return true;
}else{
	return false;
}
mysqli_close($conn);
}

function delete($id){
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
$del = "DELETE FROM daftar WHERE `id` = '$id'";
$hasil = mysqli_query($conn,$del);
if($hasil){
	return true;
}else{
	return false;
}
mysqli_close($conn);
}

function ceklogin($mail,$pass){
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
	$result = mysqli_query($conn,"SELECT sandi,id,nama FROM daftar WHERE email='$mail'");
	if($result){
			$hmm = mysqli_fetch_assoc($result);
				if(md5($hmm['sandi']) == md5($pass)){
				$_SESSION['login'] = true;
				$_SESSION['id'] = $hmm['id'];
				$_SESSION['nama'] = $hmm['nama'];
				return true;
				}else{
				return false;
				}
	}else{
	return false;	
	}
mysqli_close($conn);
}
?>