<?php include "header.php"; ?>

<h2>Laporan</h2>


<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 10px;
  text-decoration: inline;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 10px;
  text-decoration: inline;
}

li a:hover {
  background-color: red;
  }

</style>
<ul>
	<li><a href="laporan_data_guru.php" target="_blank">Laporan Data Guru</a></li>
	<li><a href="laporan_data_siswa.php" target="_blank">Laporan Data Siswa</a></li>
	</ul>
	
<h3>laporan Pembayaran</h3>

<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 10px;
  text-decoration: inline;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 10px;
  text-decoration: inline;
}

li a:hover {
   background-color: red;
  }

</style>
		<form method="GET" action="laporan_pembayaran.php" target="_blank">
			<tr>
				<td>Mulai Tanggal</td>
				<td><input type="date" name="tgl1"  value="<?php echo date ('Y-m-d'); ?>" /></td>
				<td>Sampai Tanggal</td>
				<td><input type="date" name="tgl2" value="<?php echo date ('Y-m-d'); ?>" /></td>
			<td><input type="submit" value="Tampilkan" /></td> 
			</tr>
			
		</form>
<?php include "footer.php"; ?>