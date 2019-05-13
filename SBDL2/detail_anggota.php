<?php

include ("koneksi.php");
?>
<a href="index.php">Home</a>
<h3 align="center">Data Kode Anggota</h3>
<div class="table-responsive">
<table border="1" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<th>no.</th>
		<th>kd_anggota</th>
		<th>nama</th>
		<th>jk</th>
		<th>alamat</th>
	</tr>
<?php
	$no=1;
	$kd=$_GET['kd_anggota'];
	$query=("SELECT * FROM tabel_anggota where kd_anggota='$kd'");
	$lihat = mysqli_query($conn, $query) or die('Error, query failed.' .mysql_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>	
		<td><?php echo"$no.";?></td>
		<td><?php echo"$r[kd_anggota]";?></td>
		<td><?php echo"$r[nama]";?></td>
		<td><?php echo"$r[jk]";?></td>
		<td><?php echo"$r[alamat]";?></td>
	</tr>
<?php
$no++;
} ?>

</table>
</div>
