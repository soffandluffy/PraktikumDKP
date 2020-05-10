<?php
// 1. Modul 5 (Class dan Constructor)
// 2. Modul 6 (Setter dan Getter)
Class Peminjaman { 

	// 3. Modul 1 (Variabel, Type data, Array)
	private $Nama;
	private $Nik;
	private $Barang;
	private $Tanggal;
	private $Jumlah;

	function setNama($Nama) { $this->Nama = $Nama; }
	function setNik($Nik){ $this->Nik = $Nik; }
	function setBarang($Barang){ $this->Barang = $Barang; }
	function setTanggal($Tanggal){ $this->Tanggal = $Tanggal; }
	function setJumlah($Jumlah){ $this->Jumlah = $Jumlah; }
	
	function getNama() { return $this->Nama; }
	function getNik() { return $this->Nik; }
	function getBarang() { return $this->Barang; }
	function getTanggal() { return $this->Tanggal; }
	function getJumlah() { return $this->Jumlah; }
}	

// 4. Modul 4 (Function dan Method)
function appname(){
	echo '<span>Input data peminjaman barang</span>';
}
?>

<!-- 5. Modul 8 GUI -->
<!DOCTYPE html>
<html>
<head>
	<title>Tugas Akhir</title>
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="row">
	<div class="col l6">
		<div class="card red lighten-4">
			<div class="card-content">
				<form action="OfficeSupport.php" method="POST">
					<div class="row">
						<div class="input-field col l12 center">
							<?php appname() ?>
						</div>
						<div class="input-field col l12">
							<select name="Barang" required>
								<option value="Laptop">Laptop</option>
								<option value="Infocus">Infocus</option>
								<option value="Speaker">Speaker</option>
								<option value="Modem">Modem</option>
								<option value="Mouse">Mouse</option>
								<option value="Keyboard">Keyboard</option>
							</select>
	          				<label for="Barang">Barang</label>
						</div>
						<div class="input-field col l12">
							<input name="Jumlah" id="Jumlah" type="number" class="validate" required>
	          				<label for="Jumlah">Jumlah Barang</label>
						</div>
						<div class="input-field col l12">
							<input name="nama" pattern="[a-zA-Z ]+" id="nama" type="text" class="validate" required>
	          				<label for="nama">Nama Peminjam</label>
						</div>
						<div class="input-field col l12">
							<input name="Nik" id="Nik" type="number" class="validate" required>
	          				<label for="Nik">NIK</label>
						</div>
						<div class="input-field col l12">
							<input id="Tanggal" type="text" class="datepicker" name="Tanggal" required>
	          				<label for="Tanggal">Tanggal Pengembalian</label>
						</div>
						<div class="input-field col l12">
							<button type="submit" class="btn teal width-30">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>	
	</div>
	<?php
	// 6. Modul 2 (Pengkondisian)
	if (!empty($_POST['nama']) && !empty($_POST['Nik']) 
		&& !empty($_POST['Barang']) && !empty($_POST['Tanggal']) 
		&& !empty($_POST['Jumlah'])) {
		
		$peminjaman = new Peminjaman();

		$peminjaman->setNama($_POST['nama']);
		$peminjaman->setNik($_POST['Nik']);
		$peminjaman->setBarang($_POST['Barang']);
		$peminjaman->setTanggal($_POST['Tanggal']);
		$peminjaman->setJumlah($_POST['Jumlah']);

		echo "<div class='col l6'>";
			echo "<div class='card'>";
				echo "<div class='row'>";
					echo "<div class='card-content'>";
						echo "<div class='row'>";
							echo "<div class='col l12 center'>";
								echo "<p>Detail peminjaman</p>";
								echo "<table class='highlight'>";
								echo "<tbody>";
								echo "<tr>";
									echo "<td>Tanggal Peminjaman</td>";
									echo "<td>". date("M d, Y") ."</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td>Barang</td>";
									echo "<td>". $peminjaman->getBarang() ."</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td>Jumlah</td>";
									echo "<td>". $peminjaman->getJumlah() ."</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td>Nama</td>";
									echo "<td>". $peminjaman->getNama() ."</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td>NIK</td>";
									echo "<td>". $peminjaman->getNik() ."</td>";
								echo "</tr>";
								echo "<tr class='teal white-text'>";
									echo "<td>Tanggal Pengembalian</td>";
									echo "<td>". $peminjaman->getTanggal() ."</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td></td>";
									echo "<td class='center'>Jakarta, ".date("d M Y")."</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td class='center'>Inventaris</td>";
									echo "<td class='center'>Peminjam</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td class='center'>(TTD Disini)</td>";
									echo "<td class='center'>(TTD Disini)</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td class='center'>Soffan Marsus Ahmad</td>";
									echo "<td class='center'>". $peminjaman->getNama() ."</td>";
								echo "</tr>";
								echo "</tbody>";
								echo "</table>";
								echo "<br>";
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
	    $('.datepicker').datepicker({
	    	minDate: new Date(),
	    });
	});
</script>
</body>
</html>