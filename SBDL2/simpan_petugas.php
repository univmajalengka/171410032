<?php

include 'koneksi.php';

$kd = $_POST['kd_petugas'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$jk = $_POST['jk'];
$jam = $_POST['jam_tugas'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO tabel_petugas VALUES ('$kd','$nama','$jabatan','$jk','$jam_tugas','$telp','$alamat')";
$result = mysqli_query($conn,$query);
if($result){
	echo "<script>alert('data berhasil ditambahkan'); 
				document.location.href = 'input_petugas.php';
	</script>";
} else {
	echo "<script>alert('data gagal ditambahkan');
			document.location.href = 'input_petugas.php';
	</script>";
}


?>