<?php 
session_start();
if (isset($_SESSION['login'])){
	include "koneksi.php" ;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Data Siswa</title>
	<style type="text/css">
		body {
			font-family: Arial;
		}
		@media print{
			.no-print{
				display: none;
			}
		}
		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
<h3>LAPORAN DATA SISWA</h3>
<hr/>
<table width="100%" border="2" cellspacing="1" cellspacing="2">
	<tr>
		<th>No.</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>Tahun Ajaran</th>
	</tr>
	<?php
	if(empty(@$_GET[kelas])){
		$sqlGuru = mysqli_query($konek, "SELECT * from siswa order by nis asc");
	}else{
		$sqlGuru = mysqli_query($konek, "SELECT * from siswa WHERE kelas='$_GET[kelas]' order by nis asc");
	}
	$no=1;
	while($d=mysqli_fetch_array($sqlGuru)){
		echo "<tr>
			<td align='center'>$no</td>
			<td align='center'>$d[nis]</td>
			<td>$d[namasiswa]</td>
			<td align='center'>$d[kelas]</td>
			<td align='center'>$d[tahunajaran]</td>
		</tr>";
		$no++;
	}
	?>
</table>

<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<p>Jakarta, <?php echo date('d/m/y'); ?><br/>
				Operator,</p>
			<br/>
			<br/>
			<p>_________________</p>
		</td>
	</tr>	

</table>
<a href="laporan_data_siswa.php?kelas=<?php echo $_GET['kelas']; ?>" onclick="window.print();">Cetak/print</a>
</body>
</html>

<?php
}else{
	header('location:login.php');
}

?>