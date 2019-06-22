<?php

include ("koneksi.php");
?>
<h3 align="center">Data Pinjam</h3>
<div class="table-responsive">
	<a href="input_pinjam.php">Input Pinjam</a>
<table border="2" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<th>No.</th>
		<th>Kd_Pinjam</th>
		<th>Judul</th>
		<th>Nama_Petugas</th>
		<th>Nama</th>
		<th>Tgl_Pinjam</th>
		<th>Tgl_Kembali</th>

	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM view_pinjam");
	$lihat = mysqli_query($conn, $query) or die('Error, query failed.' .mysql_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$no.";?></td>
		<td><?php echo"$r[kd_pinjam]";?></td>
		<td><?php echo"$r[judul]";?></td>
		<td><?php echo"$r[nama_petugas]";?></td>
		<td><?php echo"$r[nama]";?></td>
		<td><?php echo"$r[tgl_pinjam]";?></td>
		<td><?php echo"$r[tgl_kembali]";?></td>
		<td><a href="detail_pinjam.php?kd_pinjam=<?=$r['kd_pinjam'];?>">Detail</a></td>
		<td><a href="edit_pinjam.php?kd_pinjam=<?=$r['kd_pinjam'];?>">Edit</a></td>
		<td><a href="delete_kd_pinjam.php?kd_kembali=<?= $r['kd_pinjam'];?>">Delete</a></td>
	</tr>

<?php
$no++;
} ?>

</table>
</div>