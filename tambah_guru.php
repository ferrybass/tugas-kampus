<?php include "header.php"; ?>

<h3>Tambah Data Guru</h3>
<form method="post" action="">
	<table>
		<tr>
			<td>Nama Guru</td>
			<td><input type="text" name="namaguru"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"/></td>
		</tr>
	</table>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel dari elemen form
	$nama = $_POST['namaguru'];
		if($nama==''){
		echo "form belum lengkap!!!";
	}else{
		//proses simpan data guru
		$simpan = mysqli_query($konek, "INSERT INTO guru(namaguru) VALUES ('$nama')");
		
		if(!$simpan){
			echo "Simpan Data Gagal!!!";
		}else{
			header('location:tampil_guru.php');
		}
	}
}
 include "footer.php"; ?>