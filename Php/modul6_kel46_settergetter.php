<?php

Class Mobil { //membuat kelas

	private $merk;
	private $tipe;
	private $warna;
	private $jenisBBM;
	
	//membuat setter
	function setMerk($merk) {
		$this->merk = $merk;
	}
	function setTipe($tipe){
		$this->tipe = $tipe;
	}
	function setWarna($warna){
		$this->warna = $warna;
	}
	function setJenisBBM($jenisBBM){
		$this->jenisBBM = $jenisBBM;
	}
	
	//membuat getter
	function getMerk() {
		return $this->merk;
	}
	function getTipe() {
		return $this->tipe;
	}
	function getWarna() {
		return $this->warna;
	}
	function getJenisBBM() {
		return $this->jenisBBM;
	}
} // akhir kelas

//membuat objek
$mobil_baru = new Mobil();

//mengatur nilai
$mobil_baru->setMerk("Mitsubishi");
$mobil_baru->setTipe("Mirage");
$mobil_baru->setWarna("merah");
$mobil_baru->setJenisBBM("Pertamax");

//menampilkan data
echo "Saya punya mobil dengan merk ".$mobil_baru->getMerk()." tipe ".$mobil_baru->getTipe();
echo " berwarna ".$mobil_baru->getWarna().".<br> Mobil saya menggunakan bensin berjenis ".$mobil_baru->getJenisBBM();
		
?>