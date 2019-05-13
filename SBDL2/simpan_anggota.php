<?php

include 'koneksi.php';

$kd = $_POST['kd_anggota'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO tabel_anggota VALUES ('$kd','$nama','$jk','$alamat')";
$result = mysqli_query($conn,$query);
if($result){
	echo "<script>alert('data berhasil ditambahkan'); 
				document.location.href = 'input_anggota.php';
	</script>";
} else {
	echo "<script>alert('data gagal ditambahkan');
			document.location.href = 'input_anggota.php';
	</script>";
}


?>