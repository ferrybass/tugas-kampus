<?php include "header.php";?>

<h3>Data Wali Kelas</h3>
<!-- <form method="get" action="">
	Nama Kelas:<input type="text" name="kelas"/>
	<input type="submit" name="cari" value="Cari kelas" />
</form> -->
<form method="get" action="">
<select name="kelas" onchange="this.form.submit()">
<option value="">Pilih Kelas</option>
<option value="VIIA">VIIA</option>
<option value="VIIB">VIIB</option>
<option value="VIIC">VIIC</option>
<option value="VIIIA">VIIIA</option>
<option value="VIIIB">VIIIB</option>
<option value="VIIIC">VIIIC</option>
<option value="IXA">IXA</option>
<option value="IXB">IXB</option>
<option value="IXC">IXC</option>

</select>
</form>
<?php
/*if(isset($_GET['kelas']) && $_GET['kelas']!=''){
	$sqlguru = mysqli_query($konek, "SELECT * FROM siswa WHERE kelas='$_GET[kelas]'");
	$ds=mysqli_fetch_array($sqlguru);
	$nis = $ds['kelas'];*/
?>
</br>
<table border= "1">
	<tr>
		<th>No.</th>
		<th>Nama Kelas</th>
		<th>Nama Wali Kelas</th>
		<th>Aksi</th>
	</tr>
	<?php
	if(isset($_GET['kelas']) && $_GET['kelas']!=''){
		echo "cuks";
	$sql = mysqli_query($konek, "SELECT walikelas.kelas,guru.namaguru 
								FROM walikelas 
								INNER JOIN guru ON walikelas.idguru=guru.idguru WHERE walikelas.kelas='$_GET[kelas]' ORDER BY walikelas.kelas ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo"<tr>
			<td>$no</td>
			<td>$d[kelas]</td>
			<td>$d[namaguru]</td>
			<td>
				<a href='edit_walikelas.php?kls=$d[kelas]'>Edit</a> |
				<a href='Hapus_walikelas.php?kls=$d[kelas]'>Hapus</a> 
			</td>
		</tr>";
		$no++;
	}
}
/*}*/
	?>
</table>

<?php include "footer.php";?>