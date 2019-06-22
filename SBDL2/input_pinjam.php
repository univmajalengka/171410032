<!DOCTYPE html>
<html>
<head>
	<title>input pinjam</title>
</head>
<body>
<form action="simpan_pinjam.php" method="post">
	<h1>Input Pinjam</h1>
	<ul>
		<li>Kode Pinjam</li>
		<li><input type="text" name="kd_pinjam"></li>
		<li>Kode Buku</li>
		<li><input type="text" name="kd_buku"></li>
		<li>Tanggal Pinjam</li>
		<li><input type="text" name="tgl_pinjam"></li>
		<li>Tanggal Kembali</li>
		<li><input type="text" name="tgl_kembali"></li>
		<li>Kode Petugas</li>
		<li><input type="text" name="kd_petugas"></li>
		<li>Kode Anggota</li>
		<li><input type="text" name="kd_anggota"></li>
		<li><button type="submit" name="simpan">Simpan</button></li>
	</ul>
</form>
</body>
</html>
