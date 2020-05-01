<?php
Class Karyawan { 
	private $Nama;
	private $Nik;
	private $Divisi;
	private $Golongan;
	private $Hari;

	function setNama($Nama) { $this->Nama = $Nama; }
	function setNik($Nik){ $this->Nik = $Nik; }
	function setDivisi($Divisi){ $this->Divisi = $Divisi; }
	function setGolongan($Golongan){ $this->Golongan = $Golongan; }
	function setHari($Hari){ $this->Hari = $Hari; }
	
	function getNama() { return $this->Nama; }
	function getNik() { return $this->Nik; }
	function getDivisi() { return $this->Divisi; }
	function getGolongan() { return $this->Golongan; }
	function getHari() { return $this->Hari; }
}	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tugas Modul 8</title>
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="row">
	<div class="col l6">
		<div class="card">
			<div class="card-content">
				<form action="Modul8_payroll.php" method="POST">
					<div class="row">
						<div class="input-field col l12 center">
							<span>Input data karyawan</span>
						</div>
						<div class="input-field col l12">
							<input name="nama" id="nama" type="text" class="validate">
	          				<label for="nama">Nama</label>
						</div>
						<div class="input-field col l12">
							<input name="Nik" id="Nik" type="text" class="validate">
	          				<label for="Nik">Nik</label>
						</div>
						<div class="input-field col l12">
							<select name="Divisi">
								<option value="IT">IT</option>
								<option value="HRD">HRD</option>
								<option value="Eksekutif">Eksekutif</option>
							</select>
	          				<label for="Divisi">Divisi</label>
						</div>
						<div class="input-field col l12">
							<select name="Golongan">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
	          				<label for="Golongan">Golongan</label>
						</div>
						<div class="input-field col l12">
							<input name="Hari" id="Hari" type="text" class="validate">
	          				<label for="Hari">Jumlah Hari Masuk</label>
						</div>
						<div class="input-field col l12">
							<button type="submit" class="btn green width-30">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>	
	</div>
	<?php
	if (!empty($_POST['nama']) && !empty($_POST['Nik']) 
		&& !empty($_POST['Divisi']) && !empty($_POST['Golongan']) 
		&& !empty($_POST['Hari'])) {
		$gol = $_POST['Golongan'];
		$hari = $_POST['Hari'];
		$gapok = 0;
		$asuransi = 0;
		$transport = 0;
		for ($i=0; $i < $hari; $i++) { 
			$transport += 50000;
		}
		$gaji = 0;
		$total = 0;
		switch ($gol) {
			case '1':
				$gapok = 5000000;
				$asuransi = $gapok * 5 / 100;
				$gaji = $gapok - $asuransi;
				$total = $gaji + $transport;
				break;
			case '2':
				$gapok = 3000000;
				$asuransi = $gapok * 3 / 100;
				$gaji = $gapok - $asuransi;
				$total = $gaji + $transport;
				break;
			case '3':
				$gapok = 2000000;
				$asuransi = $gapok * 2 / 100;
				$gaji = $gapok - $asuransi;
				$total = $gaji + $transport;
				break;
			default:
				break;
		}
		$karyawan = new Karyawan();

		$karyawan->setNama($_POST['nama']);
		$karyawan->setNik($_POST['Nik']);
		$karyawan->setDivisi($_POST['Divisi']);
		$karyawan->setGolongan($gol);
		$karyawan->setHari($hari);

		echo "<div class='col l6'>";
			echo "<div class='card'>";
				echo "<div class='row'>";
					echo "<div class='card-content'>";
						echo "<div class='row'>";
							echo "<div class='col l12 center'>";
								echo "<p>Detail Karyawan</p>";
								echo "<table class='highlight'>";
								echo "<tbody>";
								echo "<tr>";
									echo "<td>Nama</td>";
									echo "<td>". $karyawan->getNama() ."</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td>NIK</td>";
									echo "<td>". $karyawan->getNik() ."</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td>Divisi</td>";
									echo "<td>". $karyawan->getDivisi() ."</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td>Golongan</td>";
									echo "<td>". $karyawan->getGolongan() ."</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td>Jumlah hari masuk</td>";
									echo "<td>". $karyawan->getHari() ."</td>";
								echo "</tr>";
								echo "</tbody>";
								echo "</table>";
								echo "<br>";
								echo "<p>Gaji Karyawan</p>";
								echo "<table class='highlight'>";
								echo "<tbody>";
								echo "<tr>";
									echo "<td>Gaji pokok</td>";
									echo "<td>". $gapok ."</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td>Asuransi</td>";
									echo "<td>". $asuransi ."</td>";
								echo "</tr>";
								echo "<tr >";
									echo "<td>Transport (50.000/hari)</td>";
									echo "<td>". $transport ."</td>";
								echo "</tr>";
								echo "<tr class='white-text teal lighten-2'>";
									echo "<td>Total Gaji</td>";
									echo "<td> Rp. ". $total ."</td>";
								echo "</tr>";
								echo "</tbody>";
								echo "</table>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	}
	?>
</div>

<script type="text/javascript" src="../js/vendors.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	    $('select').formSelect();
	});
</script>
</body>
</html>