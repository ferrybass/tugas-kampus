<?php include "header.php"; ?>

<h3>Data Siswa</h3>
<a href="tambah_siswa.php">Tambah Data</a>
<table border="1">
	<tr>
		<th>No.</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>Tahun ajaran</th>
		<th>biaya</th>
		<th>Aksi</th>
	</tr>

<?php 
$sql = mysqli_query($konek, "select * from siswa order by nis asc");
$no=1;
while($d=mysqli_fetch_array($sql)){
	echo "<tr>
			<td>$no</td>
			<td>$d[nis]</td>
			<td>$d[namasiswa]</td>
			<td>$d[kelas]</td>
			<td>$d[tahunajaran]</td>
			<td>$d[biaya]</td>
			<td>
			<a href = 'edit_siswa.php?id=$d[idsiswa]'>Edit</a> /
			<a href = 'hapus_siswa.php?id=$d[idsiswa]'>Hapus</a> 
			</td>
	</tr>";
	$no++;
}
?>
</table>
<?php include "footer.php"; ?>