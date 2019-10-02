<?php include "header.php"?>

<h3>Transaksi Pembayaran SPP</h3>
<!-- <form method="get" action="">
	NIS:<input type="text" name="nis"/>
	<input type="submit" name="cari" value="Cari Siswa" />
</form> -->
<form method="get" action="">
<select name="nis" onchange="this.form.submit()">
<option value="">Pilih</option>
<option value="17001">17001</option>
<option value="17002">17002</option>
<option value="17003">17003</option>
<option value="17004">17004</option>
<option value="17005">17005</option>
<option value="17006">17006</option>
<option value="17007">17007</option>
<option value="17008">17008</option>
<option value="17009">17009</option>
<option value="17010">17010</option>
<option value="17011">17011</option>
<option value="17012">17012</option>
<option value="17013">17013</option>
<option value="17014">17014</option>
<option value="17015">17015</option>
<option value="17016">17016</option>
<option value="17017">17017</option>

</select>
</form>
<?php
if(isset($_GET['nis']) && $_GET['nis']!=''){
	$sqlSiswa = mysqli_query($konek, "SELECT * FROM siswa WHERE nis='$_GET[nis]'");
	$ds=mysqli_fetch_array($sqlSiswa);
	$nis = $ds['nis'];
?>

<h3>Biodata Siswa</h3>
<table>
	<tr>
		<td>NIS</td>
		<td>:</td>
		<td><?php echo $ds['nis']; ?></td>
	</tr>
	<tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td><?php echo $ds['namasiswa']; ?></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><?php echo $ds['kelas']; ?></td>
	</tr>
	<tr>
		<td>Tahun Ajaran</td>
		<td>:</td>
		<td><?php echo $ds['tahunajaran']; ?></td>
	</tr>
</table>
<h3>Tagihan SPP Siswa</h3>
<table border="1">
	<tr>
		<th>No</th>
		<th>Bulan</th>
		<th>Jatuh Tempo</th>
		<th>No.Bayar</th>
		<th>Tgl.Bayar</th>
		<th>Jumlah</th>
		<th>Keterangan</th>
		<th>Bayar</th>
	</tr>
	<?php
	$sql = mysqli_query($konek, "SELECT * FROM spp WHERE idspp='$ds[idsiswa]' ORDER BY jatuhtempo ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo 	"<tr>
					<td>$no</td>
					<td>$d[bulan]</td>
					<td>$d[jatuhtempo]</td>
					<td>$d[nobayar]</td>
					<td>$d[tglbayar]</td>
					<td>$d[jumlah]</td>
					<td>$d[ket]</td>
					<td align='center'>";
						if($d['nobayar']==''){
							echo "<a href='proses_transaksi.php?nis=$nis&act=bayar&id=$d[idsiswa]'>Bayar</a>";
						}else{
							echo "-";
						}
					echo "</td>
				</tr>";
			$no++;
		}
	?>
</table>

<?php
}
?>
<p>Pembayaran SPP dilakukan dengan cara mencari tagihan siswa dengan NIS melalui form diatas, kemudian proses pembayaran</p>
<?php include "footer.php" ?>