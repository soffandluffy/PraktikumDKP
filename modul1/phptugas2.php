<?php
	$alas = isset($_POST['alas'])?abs((double)$_POST['alas']):'';
	$tinggi = isset($_POST['tinggi'])?abs((double)$_POST['tinggi']):'';
	$sisimiring = sqrt(pow($alas,2) + pow($tinggi,2));
?>

<html>
<head>
	<title>PraktikumDKP</title>
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

	<div class="row">
		<div class="col l4">
			<div class="card">
				<div class="card-content">
					<span class="card-title">Menghitung pythagoras</span>
					<p>Kelompok 46 &emsp; (Shift : 2)</p>
					<p>Soffan Marsus Ahmad (21120119130042)</p>
					<p>Muhammad Firmansyah (21120119130102)</p>
					<form method="POST" action="phptugas2.php">
						<div class="row">
					        <div class="input-field col s4">
					          <input id="alas" type="number" name="alas" value="<?php echo (isset($alas))?$alas:''; ?>">
					          <label for="alas">Alas</label>
					        </div>
					        <div class="input-field col s4">
					          <input id="tinggi" type="number" name="tinggi" value="<?php echo (isset($tinggi))?$tinggi:''; ?>">
					          <label for="tinggi">Tinggi</label>
					        </div>
					        <div class="input-field col s1">
					        	<button class="btn green waves-effect waves-light" type="submit" name="action">
					        		Go
					        	</button>
					        </div>
					    </div>
					</form>
					<div class="input-field">
						<input id="sisimiring" type="number" name="sisimiring" value="<?php echo (isset($sisimiring))?$sisimiring:''; ?>">
					    <label for="sisimiring">Sisi Miring</label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="../js/vendors.min.js"></script>
</body>
</html>





