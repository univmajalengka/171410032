<?php

include ("koneksi.php");
?>
<h3 align="center">Data Petugas</h3>
<div class="table-responsive">
	<a href="input_petugas.php">Input Petugas</a>
<table border="2" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<th>No.</th>
		<th>Kd_Petugas</th>
		<th>Nama</th>
		<th>Jabatan</th>
		<th>JK</th>
		<th>Jam_Tugas</th>
		<th>Telp</th>
		<th>Alamat</th>

	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM tabel_petugas");
	$lihat = mysqli_query($conn, $query) or die('Error, query failed.' .mysql_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$no.";?></td>
		<td><?php echo"$r[kd_petugas]";?></td>
		<td><?php echo"$r[nama]";?></td>
		<td><?php echo"$r[jabatan]";?></td>
		<td><?php echo"$r[jk]";?></td>
		<td><?php echo"$r[jam_tugas]";?></td>
		<td><?php echo"$r[telp]";?></td>
		<td><?php echo"$r[alamat]";?></td>
		<td><a href="detail_petugas.php?kd_petugas=<?=$r['kd_petugas'];?>">Detail</a></td>
		<td><a href="edit_petugas.php?kd_petugas=<?=$r['kd_petugas'];?>">Edit</a></td>
		<td><a href="delete_kd_petugas.php?kd_petugas=<?= $r['kd_petugas'];?>">Delete</a></td>
	</tr>

<?php
$no++;
} ?>

</table>
</div>