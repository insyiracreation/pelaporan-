<?php
if (isset($_POST['data_pelapor'])) {
	$nis = '';
	$nama = $_POST['namereporter'];
	$status = $_POST['status'];
	if (isset($_POST['Nis'])) {
		$nis = $_POST['Nis'];
	}

	echo $nama;
}
echo $_POST['jajal'];
?>