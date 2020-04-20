<?php
Class Mahasiswa { 
	private $Nama;
	private $Nim;
	private $Jurusan;
	private $Status;
	private $Hobi;
	function setNama($Nama) {
		$this->Nama = $Nama;
	}
	function setNim($Nim){
		$this->Nim = $Nim;
	}
	function setJurusan($Jurusan){
		$this->Jurusan = $Jurusan;
	}
	function setStatus($Status){
		$this->Status = $Status;
	}
	function setHobi($Hobi){
		$this->Hobi = $Hobi;
	}
	
	function getNama() {
		return $this->Nama;
	}
	function getNim() {
		return $this->Nim;
	}
	function getJurusan() {
		return $this->Jurusan;
	}
	function getStatus() {
		return $this->Status;
	}
	function getHobi() {
		return $this->Hobi;
	}
}	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tugas Modul 6</title>
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="row">
	<div class="col l6">
		<div class="card">
			<div class="card-content">
				<form action="Tugas_Kelompok46.php" method="POST">
					<div class="row">
						<div class="input-field col l6 center">
							<span>Mahasiswa 1</span>
						</div>
						<div class="input-field col l6 center">
							<span>Mahasiswa 2</span>
						</div>
						<div class="input-field col l6">
							<input name="nama1" id="nama1" type="text" class="validate">
	          				<label for="nama1">Nama</label>
						</div>
						<div class="input-field col l6">
							<input name="nama2" id="nama2" type="text" class="validate">
	          				<label for="nama2">Nama</label>
						</div>
						<div class="input-field col l6">
							<input name="nim1" id="nim1" type="text" class="validate">
	          				<label for="nim1">NIM</label>
						</div>
						<div class="input-field col l6">
							<input name="nim2" id="nim2" type="text" class="validate">
	          				<label for="nim2">NIM</label>
						</div>
						<div class="input-field col l6">
							<input name="jurusan1" id="jurusan1" type="text" class="validate">
	          				<label for="jurusan1">Jurusan</label>
						</div>
						<div class="input-field col l6">
							<input name="jurusan2" id="jurusan2" type="text" class="validate">
	          				<label for="jurusan2">Jurusan</label>
						</div>
						<div class="input-field col l6">
							<input name="status1" id="status1" type="text" class="validate">
	          				<label for="status1">Status</label>
						</div>
						<div class="input-field col l6">
							<input name="status2" id="status2" type="text" class="validate">
	          				<label for="status2">Status</label>
						</div>
						<div class="input-field col l6">
							<input name="hobi1" id="hobi1" type="text" class="validate">
	          				<label for="hobi1">Hobi</label>
						</div>
						<div class="input-field col l6">
							<input name="hobi2" id="hobi2" type="text" class="validate">
	          				<label for="hobi2">Hobi</label>
						</div>
						<div class="input-field col l6">
							<button type="submit" class="btn">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>	
	</div>
	<?php
	if (!empty($_POST['nama1']) && !empty($_POST['nim1']) 
		&& !empty($_POST['jurusan1']) && !empty($_POST['status1']) 
		&& !empty($_POST['hobi1'])) {
		if (!empty($_POST['nama2']) && !empty($_POST['nim2']) 
			&& !empty($_POST['jurusan2']) && !empty($_POST['status2']) 
			&& !empty($_POST['hobi2'])) {
			$mahasiswa1 = new Mahasiswa();

			$mahasiswa1->setNama($_POST['nama1']);
			$mahasiswa1->setNim($_POST['nim1']);
			$mahasiswa1->setJurusan($_POST['jurusan1']);
			$mahasiswa1->setStatus($_POST['status1']);
			$mahasiswa1->setHobi($_POST['hobi1']);

			$mahasiswa2 = new Mahasiswa();

			$mahasiswa2->setNama($_POST['nama2']);
			$mahasiswa2->setNim($_POST['nim2']);
			$mahasiswa2->setJurusan($_POST['jurusan2']);
			$mahasiswa2->setStatus($_POST['status2']);
			$mahasiswa2->setHobi($_POST['hobi2']);

			echo "<div class='col l4'>";
				echo "<div class='card'>";
					echo "<div class='row'>";
						echo "<div class='card-content'>";
							echo "<div class='row'>";
								echo "<div class='col l6 center'>";
									echo "<p>" . "Mahasiswa 1" . "</p>";
									echo "<p>" . $mahasiswa1->getNama() . "</p>";
									echo "<p>" . $mahasiswa1->getNim() . "</p>";
									echo "<p>" . $mahasiswa1->getJurusan() . "</p>";
									echo "<p>" . $mahasiswa1->getStatus() . "</p>";
									echo "<p>" . $mahasiswa1->getHobi() . "</p>";
								echo "</div>";
								echo "<div class='col l6 center'>";
									echo "<p>" . "Mahasiswa 2" . "</p>";
									echo "<p>" . $mahasiswa2->getNama() . "</p>";
									echo "<p>" . $mahasiswa2->getNim() . "</p>";
									echo "<p>" . $mahasiswa2->getJurusan() . "</p>";
									echo "<p>" . $mahasiswa2->getStatus() . "</p>";
									echo "<p>" . $mahasiswa2->getHobi() . "</p>";
								echo "</div>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		}
	}
	?>
</div>

<script type="text/javascript" src="../js/vendors.min.js"></script>
</body>
</html>