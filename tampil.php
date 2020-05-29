<?php
	include "koneksi.php";
	$sql = "SELECT nama, no_hp FROM biodata ORDER BY nama";
	$hasil = mysqli_query($koneksi,$sql);
	while($baris = mysqli_fetch_array($hasil, MYSQLI_ASSOC)){
		echo $baris['nama'];
		echo '<br>';
	}
?>