<?php

	$pelajar="Duta";

	function siswa($nama="Djati", $kelas="XI RPL"){
	global $pelajar; //mengambil variable dari luar function
		echo "Siswa kelas $kelas yang bernama $pelajar selalu rajin.";
	}

	siswa();

?>

