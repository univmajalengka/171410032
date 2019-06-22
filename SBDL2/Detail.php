<?php
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		include "koneksi.php"; 
	?>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>Dashboard | admin</title>
</head>
<body>
	<nav>
		<ul class="kiri">
			<li><a href="../home.php">Menu</a></li>
		</ul>
	</nav>
	<div class="sidebar">
		<ul>
			<li><a href="../home.php">Home</a></li>
			<li><a href="../input_anggota.php">Anggota</a></li>
			<li><a href="../input_buku.php">Buku</a></li>
			<li><a href="../input_kembali.php">Kembali</a></li>
			<li><a href="../input_petugas.php">Petugas</a></li>
			<li><a href="../input_pinjam.php">Pinjam</a></li>
			<li><a href="../input_rak.php">Rak</a></li>
			<li><a href="../User.php">User</a></li>
		</ul>
	</div>
	<div class="main">
		<div class="isimain">
			<?php
			$id = $_GET['kd_anggota'];
			$link = koneksi.php();
			$sql = "SELECT tabel_anggota.kd_anggota, tabel_anggota.nama, tabel_anggota.jk, tabel_anggota.alamat, tabel_buku.judul, tabel_buku.pengarang, tabel_buku.penerbit, tabel_buku.tahun_terbit, tabel_petugas.nama, tabel_petugas.jabatan, tabel_petugas.jk, tabel_petugas.jam_tugas, tabel_petugas.telp,tabel_petugas.alamat, tabel_kembali.tgl_kembali, tabel_kembali.denda_per_hari, tabel_kembali.jml_hari, tabel_pinjam.tgl_pinjam, tabel_pinjam.tgl_kembali, tabel_rak.nama FROM tabel_pinjam JOIN tabel_anggota ON tabel_pinjam.kd_anggota = tabel_anggota.kd_anggota JOIN tabel_buku ON tabel_pinjam.kd_buku = tabel_buku.kd_buku JOIN tabel_petugas ON tabel_pinjam.kd_petugas = tabel_petugas.kd_petugas WHERE NIP='$id' ORDER BY tabel_anggota.kd_anggota"; 
			$res = mysqli_query($link,$sql);

			if (mysqli_num_rows($res)==1) {
				$data = mysqli_fetch_array($res);
			?>
				<h1><font size="5">Detail Anggota </font></h1><br>
				<table width="auto" cellpadding="10" cellspacing="5">
					<tr>
						<td>Kode Anggota</td><td>:</td>
						<td>
							<input type="text"  value="<?=$data['kd_anggota'];?>" readonly>
						</td>
						<td></td>
						<td>Nama Anggota</td><td>:</td>
						<td>
							<input type="text"  value="<?=$data['nama'];?>" readonly>
						</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td><td>:</td>
						<td>
							<input type="text"  value="<?=$data['jk'];?>" readonly>
						</td>
						<td></td>
						<td>Alamat</td><td>:</td>
						<td>
							<input type="text"  value="<?=$data['alamat'];?>" readonly>
						</td>
					</tr>
					
		
				</table>
			</form>
			<?php } ?>
		</div>
	</div>
</body>
</html>