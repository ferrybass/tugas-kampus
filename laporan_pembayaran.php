
<?php 
session_start();
if (isset($_SESSION['login'])){
	include "koneksi.php" ;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Pembayaran</title>
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
<h3>SEKOLAH MENENGAH ATAS<br/>LAPORAN PEMBAYARAN SPP</h3>
<hr/>
<table width="100%" border="1" cellspacing="0" cellspacing="4">
	<tr>
		<th>No.</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>No.Bayar</th>
		<th>Pembayaran Bulan</th>
		<th>Jumlah</th>
		<th>Keterangan</th>
	</tr>
	<?php
	$sqlBayar = mysqli_query($konek, "SELECT spp.*,siswa.nis,siswa.namasiswa,siswa.kelas
									FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa
									WHERE tglbayar BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]'
									ORDER BY tglbayar ASC");
	$no=1;
	while($d=mysqli_fetch_array($sqlBayar)){
		echo "<tr>
			<td align='center'>$no</td>
			<td align='center'>$d[nis]</td>
			<td>$d[namasiswa]</td>
			<td align='center'>$d[kelas]</td>
			<td align='center'>$d[nobayar]</td>
			<td>$d[bulan]</td>
			<td align='right'>$d[jumlah]</td>
			<td>$d[ket]</td>
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
<a href="#" onclick="window.print();">Cetak/print</a>
</body>
</html>

<?php
}else{
	header('location:login.php');
}

?>