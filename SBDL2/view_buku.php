<?php

include ("koneksi.php");
?>
<h3 align="center">Data Buku</h3>
<div class="table-responsive">
	<a href="input_buku.php">Input Buku</a>
<table border="2" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<th>No.</th>
		<th>Kd_Buku</th>
		<th>Judul</th>
		<th>Pengarang</th>
		<th>Penerbit</th>
		<th>Tahun_Terbit</th>

	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM tabel_buku");
	$lihat = mysqli_query($conn, $query) or die('Error, query failed.' .mysql_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$no.";?></td>
		<td><?php echo"$r[kd_buku]";?></td>
		<td><?php echo"$r[judul]";?></td>
		<td><?php echo"$r[pengarang]";?></td>
		<td><?php echo"$r[penerbit]";?></td>
		<td><?php echo"$r[tahun_terbit]";?></td>
		<td><a href="detail_buku.php?kd_buku=<?=$r['kd_buku'];?>">Detail</a></td>
		<td><a href="edit_buku.php?kd_buku=<?=$r['kd_buku'];?>">Edit</a></td>
		<td><a href="delete_kd_buku.php?kd_buku=<?= $r['kd_buku'];?>">Delete</a></td>
	</tr>

<?php
$no++;
} ?>

</table>
</div>