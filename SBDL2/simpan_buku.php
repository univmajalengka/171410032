<?php

include 'koneksi.php';

$kd = $_POST['kd_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$th = $_POST['tahun_terbit'];

$query = "INSERT INTO tabel_buku VALUES ('$kd','$judul','$pengarang','$penerbit','$th')";
$result = mysqli_query($conn,$query);
if($result){
	echo "<script>alert('data berhasil ditambahkan'); 
				document.location.href = 'input_buku.php';
	</script>";
} else {
	echo "<script>alert('data gagal ditambahkan');
			document.location.href = 'input_buku.php';
	</script>";
}


?>