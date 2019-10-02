
<?php 
session_start();
if (isset($_SESSION['login'])){
	include "koneksi.php" ;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Data Guru</title>
	<style type="text/css">
		@media print{
			.no-print{
				display: none;
			}
		}
	</style>
</head>
<body>
<h3>LAPORAN DATA GURU</h3>
<hr/>
<table width="100%" border="2" cellspacing="1" cellspacing="2">
	<tr>
		<th>No.</th>
		<th>ID</th>
		<th>Nama Guru</th>
	</tr>
	<?php
	$sqlGuru = mysqli_query($konek, "SELECT * FROM guru ORDER BY idguru ASC");
	$no=1;
	while($d=mysqli_fetch_array($sqlGuru)){
		echo "<tr>
			<td align='center'>$no</td>
			<td align='center'>$d[idguru]</td>
			<td>$d[namaguru]</td>
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
			<p>__________________________</p>
		</td>
	</tr>	

</table>
<a href="#" onclick="window.print();">Cetak/print</a>
</body>
</html>

<?php
}else{
	header('location:login.php');
}

?>