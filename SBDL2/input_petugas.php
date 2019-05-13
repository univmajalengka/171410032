<!DOCTYPE html>
<html>
<head>
	<title>input petugas</title>
</head>
<body>
<form action="simpan_petugas.php" method="post">
	<h1>Input petugas</h1>
	<ul>
		<li>Kode petugas</li>
		<li><input type="text" name="kd_petugas"></li>
		<li>Nama</li>
		<li><input type="text" name="nama"></li>
		<li>Jabatan</li>
		<li><input type="text" name="jabatan"></li>
		<li>Jenis Kelamin</li>
		<li>
			<select name="jk">
				<option value="">-</option>
				<option value="laki">Laki-laki</option>
				<option value="perempuan">Perempuan</option>
			</select>
		</li>
		<li>Jam tugas</li>
		<li><input type="text" name="jam_tugas"></li>	
		<li>Telpon</li>
		<li><input type="text" name="telp"></li>
		<li>Alamat</li>
		<li><input type="text" name="alamat"></li>
		<li><button type="submit" name="simpan">Simpan</button></li>
	</ul>
</form>
</body>
</html>