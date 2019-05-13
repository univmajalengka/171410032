<!DOCTYPE html>
<html>
<head>
	<title>input buku</title>
</head>
<body>
<form action="simpan_anggota.php" method="post">
	<h1>Input Anggota</h1>
	<ul>
		<li>Kode Angota</li>
		<li><input type="text" name="kd_anggota"></li>
		<li>Nama</li>
		<li><input type="text" name="nama"></li>
		<li>Jenis Kelamin</li>
		<li>
			<select name="jk">
				<option value="">-</option>
				<option value="laki">Laki-laki</option>
				<option value="perempuan">Perempuan</option>
			</select>
		</li>
		<li>Alamat</li>
		<li>
			<input type="text" name="alamat">
		</li>
		<li><button type="submit" name="simpan">Simpan</button></li>
	</ul>
</form>
</body>
</html>