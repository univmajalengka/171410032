<?php

include ("koneksi.php");
?>
<h3 align="center">Data Kembali</h3>
<div class="table-responsive">
	<a href="input_kembali.php">Input Kembali</a>
<table border="2" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<th>No.</th>
		<th>Kd_Kembali</th>
		<th>Tgl_Kembali</th>
		<th>Denda_Perhari</th>
		<th>Jml_Hari</th>
		<th>Kd_Petugas</th>
		<th>Kd_Buku</th>
		<th>Kd_Anggota</th>

	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM tabel_kembali");
	$lihat = mysqli_query($conn, $query) or die('Error, query failed.' .mysql_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$no.";?></td>
		<td><?php echo"$r[kd_kembali]";?></td>
		<td><?php echo"$r[tgl_kembali]";?></td>
		<td><?php echo"$r[denda_per_hari]";?></td>
		<td><?php echo"$r[jml_hari]";?></td>
		<td><?php echo"$r[kd_petugas]";?></td>
		<td><?php echo"$r[kd_buku]";?></td>
		<td><?php echo"$r[kd_anggota]";?></td>
		<td><a href="detail_kembali.php?kd_kembali=<?=$r['kd_kembali'];?>">Detail</a></td>
		<td><a href="edit_kembali.php?kd_kembali=<?=$r['kd_kembali'];?>">Edit</a></td>
		<td><a href="delete_kd_kembali.php?kd_kembali=<?= $r['kd_kembali'];?>">Delete</a></td>
	</tr>

<?php
$no++;
} ?>

</table>
</div>