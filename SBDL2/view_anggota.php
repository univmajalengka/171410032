<?php

include ("koneksi.php");
?>
<h3 align="center">Data Anggota</h3>
<div class="table-responsive">
	<a href="input_anggota.php">Input Anggota</a>
<table border="2" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<th>No.</th>
		<th>Kd_Anggota</th>
		<th>Nama</th>
		<th>Jk</th>
		<th>Alamat</th>

	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM tabel_anggota");
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
		<td><a href="detail_anggota.php?kd_anggota=<?=$r['kd_anggota'];?>">Detail</a></td>
		<td><a href="edit_anggota.php?kd_anggota=<?=$r['kd_anggota'];?>">Edit</a></td>
		<td><a href="delete_kd_anggota.php?kd_anggota=<?= $r['kd_anggota'];?>">Delete</a></td>
	</tr>

<?php
$no++;
} ?>

</table>
</div>