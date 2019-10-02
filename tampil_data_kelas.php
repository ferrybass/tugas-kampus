<?php include "header.php";?>



<h3>Print  Data Kelas</h3>
<form method="get" action="">
<select name="kelas" onchange="this.form.submit()">
<option value="">Pilih Kelas</option>
<option value="VIIA">VIIA</option>
<option value="VIIB">VIIB</option>

</select>
</form>
<br>
<div id ="txtHint"> 
	<style>
		table{
			width: 100%
			border-collapse:collapse;
		}
		table, td, th{
			border:1px solid black;
			padding: 3px;
		}
		th {
			text-align: left;
		}
	</style>
	<!-- <table>
		<tbody>
			<tr>
				<th>Kelas</th>
				<th>Nama Siswa</th>
			</tr>
		</tbody>
	</table> -->
<?php
/*if(isset($_GET['kelas']) && $_GET['kelas']!=''){
	echo "cuks";
	$sqlguru = mysqli_query($konek, "SELECT * FROM siswa WHERE kelas='$_GET[kelas]'");
	$ds=mysqli_fetch_array($sqlguru);
	$nis = $ds['kelas'];*/
?>
</br>
<table border= "1">
	<tr>
		<th>No.</th>
		<th>Kelas</th>
		<th>Nama Siswa</th>
		
	</tr>
	<?php
	if(isset($_GET['kelas']) && $_GET['kelas']!=''){
		echo "";
		$sql = mysqli_query($konek, "select * from siswa WHERE kelas='$_GET[kelas]' order by nis asc");
		$no=1;
		while($d=mysqli_fetch_array($sql)){
			echo"<tr>
				<td>$no</td>
				<td>$d[kelas]</td>
				<td>$d[namasiswa]</td>
				</tr>";
			$no++;
		}
	}
// }
	?>
</table>
<a href="laporan_data_siswa.php?kelas=<?php echo $_GET['kelas']; ?>">Cetak/print</a>

<?php include "footer.php";?>