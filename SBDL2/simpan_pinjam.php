<?php

include 'koneksi.php';

$kd = $_POST['kd_pinjam'];
$buku = $_POST['kd_buku'];
$tanggal_pinjam = $_POST['tgl_pinjam'];
$tanggal_kembali = $_POST['tgl_kembali'];
$petugas = $_POST['kd_petugas'];
$anggota = $_POST['kd_anggota'];

$query = "INSERT INTO tabel_kembali VALUES ('$kd','$buku','$tanggal_pinjam','$tanggal_kembali','$petugas','$anggota')";
$result = mysqli_query($conn,$query);
if($result){
	echo "<script>alert('data berhasil ditambahkan'); 
				document.location.href = 'input_pinjam.php';
	</script>";
} else {
	echo "<script>alert('data gagal ditambahkan');
			document.location.href = 'input_pinjam.php';
	</script>";
}


?>