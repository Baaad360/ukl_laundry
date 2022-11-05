<?php 
// mengaktifkan session pada php
session_start();
include 'koneksi.php';
 // menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		$_SESSION['status_login']=true;
		// alihkan ke halaman dashboard admin
		header("location:admin/index.php");
 
	// cek jika user login sebagai kasir
	}elseif($data['level']=="kasir"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "kasir";
		$_SESSION['status_login']=true;
		// alihkan ke halaman dashboard kasir
		header("location:kasir/index.php");
 
	// cek jika user login sebagai owner
	}elseif($data['level']=="owner"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "owner";
		$_SESSION['status_login']=true;
		// alihkan ke halaman dashboard owner
		header("location:owner/index.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>


