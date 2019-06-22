<?php

include ("koneksi.php");
?>
<h3 align="center">Data Rak</h3>
<div class="table-responsive">
	<a href="input_rak.php">Input Rak</a>
<table border="2" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<th>No.</th>
		<th>Kd_Rak</th>
		<th>Nama</th>
		<th>Kd_Buku</th>

	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM tabel_rak");
	$lihat = mysqli_query($conn, $query) or die('Error, query failed.' .mysql_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$no.";?></td>
		<td><?php echo"$r[kd_rak]";?></td>
		<td><?php echo"$r[nama]";?></td>
		<td><?php echo"$r[kd_buku]";?></td>
	
		<td><a href="detail_rak.php?kd_rak=<?=$r['kd_rak'];?>">Detail</a></td>
		<td><a href="edit_rak.php?kd_rak=<?=$r['kd_rak'];?>">Edit</a></td>
		<td><a href="delete_kd_rak.php?kd_rak=<?= $r['kd_rak'];?>">Delete</a></td>
	</tr>

<?php
$no++;
} ?>

</table>
</div>