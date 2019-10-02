<!DOCTYPE HTML>
<html>
<head>
<!-- <style>

body {
	background-color: lightblue;

}
form  {
	text-align: : 
	width: 300px;
  	border: 10px solid white;
  	padding: 50px;
  	margin: 10px;
  
}

</style> -->
<style>
	body{
		background-color: lightblue;
	}
</style>
	<style type="text/css">
    .login {
        margin: 150px auto;
        width: 400px;
        padding: 10px;
        border: 1px solid #ccc;
        background: lightblue;
    }
    input[type=text], input[type=password] {
        margin: 5px auto;
        width: 375px;
        padding: 10px;
    }
    input[type=submit] {
        margin 5px auto;
        float: right;
        padding: 5px;
        width: 90px;
        border: 1px solid #fff;
        color: #fff;
        background: red;
        cursor: pointer;
    }
</style>
	<title>Login Aplikasi Pembayaran SPP</title>
</head>
<body>

<h2 align="center">Silahkan Login menggunakan Username dan Password Anda</h2>
<hr/>
<form method="post" action="">
	<table align="center">
	 <tr>
		<td>Username</td>
		<td><input type="text" name="username" /></td>
	</tr>
	 <tr>
		<td>Password</td>
		<td><input type="password" name="password" /></td>
	</tr>
	 <tr>
		<td></td>
		<td><input type="submit" value="Login" /></td>
	</tr>
	</table>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel untuk menyimpan kiriman dari form
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	if($user=='' || $pass==''){
		 echo"Form belum lengkap!!";
	}else{
		include "koneksi.php";
		$sqlLogin = mysqli_query($konek, "SELECT * FROM admin 
						WHERE username='$user' AND password='$pass'");
		$jml = mysqli_num_rows($sqlLogin);
		$d=mysqli_fetch_array($sqlLogin);
		if($jml > 0){
			session_start();
			$_SESSION['login']	=true;
			$_SESSION['id']		=$d['idadmin'];
			$_SESSION['login']	=$d['username'];
			
			header ('location:./index.php');
		}else{
			echo "Username dan Password anda Salah!!!";
		}
	}
}
?>
</body>
</html>