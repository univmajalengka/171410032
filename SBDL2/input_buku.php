<!DOCTYPE html>
<html>
<head>
	<title>input buku</title>
</head>
<body>
<form action="simpan_buku.php" method="post">
	<h1>Input buku</h1>
	<ul>
		<li>Kode buku</li>
		<li><input type="text" name="kd_buku"></li>
		<li>Judul</li>
		<li><input type="text" name="judul"></li>
		<li>Pengarang</li>
		<li><input type="text" name="pengarang"></li>
		<li>Penerbit</li>
		<li><input type="text" name="penerbit"></li>	
		<li>Tahun terbit</li>
		<li><input type="text" name="tahun_terbit"></li>
		<li><button type="submit" name="simpan">Simpan</button></li>
	</ul>
</form>
</body>
</html>