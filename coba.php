<?php include "header.php";?>

<h3>Data Wali Kelas</h3>
<form method="get" action="">
	Nama:<input type="text" name="namaguru"/>
	<input type="submit" name="cari" value="Cari guru" />
</form>
<?php
if(isset($_GET['namaguru']) && $_GET['namaguru']!=''){
	$sqlguru = mysqli_query($konek, "SELECT * FROM guru WHERE namaguru='$_GET[namaguru]'");
	$ds=mysqli_fetch_array($sqlguru);
	$nis = $ds['namaguru'];
?>

<?php include "footer.php";?>