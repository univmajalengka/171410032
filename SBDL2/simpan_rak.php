<?php

include 'koneksi.php';

$kd = $_POST['kd_rak'];
$nama = $_POST['nama'];
$buku = $_POST['kd_buku'];

$query = "INSERT INTO tabel_kembali VALUES ('$kd','$nama','$buku')";
$result = mysqli_query($conn,$query);
if($result){
	echo "<script>alert('data berhasil ditambahkan'); 
				document.location.href = 'input_rak.php';
	</script>";
} else {
	echo "<script>alert('data gagal ditambahkan');
			document.location.href = 'input_rak.php';
	</script>";
}


?>