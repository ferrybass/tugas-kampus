<?php
session_start();
if(!isset($_SESSION['login'])){
	header('location:login.php');
}

include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<style>

	ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: grey;
}

li {
  float: left;
  border-right:1px solid white;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 10px;
  text-decoration: inline;
}

li a:hover {
  background-color: red;
  }
		body {
			background-color: lightblue;
		}
	</style>
	<title>Aplikasi Pembayaran SPP</title>
</head>
<body>
<h1>Aplikasi Pembayaran SPP</h1>
<hr/>
<style>
	 {
  text-decoration: underline;
}
</style>
<ul>
<li><a href="tampil_admin.php">		Data Admin</a></li> 
<li><a href="tampil_guru.php">		Data guru</a></li> 
<li><a href="tampil_walikelas.php">	Data Wali kelas</a></li> 
<li><a href="tampil_siswa.php">		Data Siswa</a></li>
<li><a href="tampil_kelas.php"> 	Data Kelas</a></li> 
<li><a href="transaksi.php">		Transaksi</a></li> 
<li><a href="laporan.php">			Laporan</a></li> 
<li><a href="tampil_data_kelas.php">Data Print</a></li>
<li><a href="logout.php">			Logout</a></li> 
</ul>
