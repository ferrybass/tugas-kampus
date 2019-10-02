<?php include "header.php"; ?>

<h3>Data Admin</h3>
<a href="tambah_guru.php">Tambah data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama Guru</th>
		<th>Aksi</th>
	</tr>
<?php
	$sql=mysqli_query($konek, "SELECT * FROM admin ORDER BY idadmin ASC");
	$no=1;
	While($d=mysqli_fetch_array($sql)){
		echo "<tr>
				<td>$no</td>
				<td>$d[namalengkap]</td>
				<td>
					<a href='edit_guru.php?id=$d[idadmin]'>Edit</a>/
					<a href='Hapus_guru.php?id=$d[idadmin]'>Hapus</a>
			</tr>";
			$no++;
	}
	?>
</table>
<?php include "footer.php"; ?>