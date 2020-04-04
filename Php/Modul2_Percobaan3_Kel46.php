<?php
	echo "<h2> Pilih Perguruan Tinggi Negeri </h2>";
	echo "1. UGM<br>";
	echo "2. UNDIP<br><hr>";

	$ptn = "2";

	if($ptn == "1") {
			echo "UGM, Universitas Gajah Mada<br>";
	}
	else if($ptn == "2"){
		echo "UNDIP, Universitas Diponegoro<br>";
	}
	echo "Program Selesai";
	?>