<?php
	session_start();
	if(!isset($_SESSION["status"])){
		header("location:login.php");
	}
?>
<?php
include '../koneksi.php';
$id = $_GET['kd_anggota'];
$link = koneksi_db();
$sql = "DELETE FROM tabel_anggota WHERE kd_anggota='$id'";
$res = mysqli_query($link,$sql);
if ($res) {
	?>
	<script type="text/javascript">
		alert("Data Anggota dengan ID <?=$id?> berhasil dihapus");
		window.location.href="../anggota.php";
	</script>
	<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		window.location.href="../anggota.php";
	</script>
	<?php
}
?>