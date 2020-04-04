<form method="post">
	Masukan angka yang diinginkan : <input type="text" name="angka"> <br> 
	<input type="submit" value="Lihat Nilai"> 
</form>
<?php
	$angka = isset($_POST['angka'])?abs((int)$_POST['angka']):'';

	switch ($angka) {
			case ($angka >=80):
			echo "Anda mendapatkan nilai A dengan nilai ".$angka; break;
			case ($angka >=70):
			echo "Anda mendapatkan nilai B dengan nilai ".$angka; break;
			case ($angka >=60):
			echo "Anda mendapatkan nilai C dengan nilai ".$angka; break;
		
		default:
			echo "Anda harus mengulang! Semangat! Karena nilai anda ".$angka; break;
	}
	echo "<br>Program Selesai<br>";
	?>