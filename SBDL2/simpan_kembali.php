<?php

include 'koneksi.php';

$kd = $_POST['kd_kembali'];
$tanggal = $_POST['tgl_kembali'];
$denda = $_POST['denda_per_hari'];
$jumlah = $_POST['jml_hari'];
$petugas = $_POST['kd_petugas'];
$buku = $_POST['kd_buku'];
$anggota = $_POST['kd_anggota'];

$query = "INSERT INTO tabel_kembali VALUES ('$kd','$tanggal','$denda','$jumlah','$petugas','$buku','$anggota')";
$result = mysqli_query($conn,$query);
if($result){
	echo "<script>alert('data berhasil ditambahkan'); 
				document.location.href = 'input_kembali.php';
	</script>";
} else {
	echo "<script>alert('data gagal ditambahkan');
			document.location.href = 'input_kembali.php';
	</script>";
}


?>