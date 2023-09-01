<!-- <?php
session_start();
if(!isset($_SESSION['nama'])){
	echo "<script>alert('Silahkan login terlebih dahulu')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
} else {

?> -->
<!DOCTYPE html>
<html lang="en">

<body>


	<!-- <!- menu Header -->
	<div id="menu-atas">
		<div id="menu_user">
			<span><?=$_SESSION['nama'];?></span>
			</div>
			<div id="menu_tanggal" align="right">
			</div>
	</div>
