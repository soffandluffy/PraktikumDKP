<?php
$koneksi = mysqli_connect('localhost','root','4dm1n54bo');
mysqli_select_db($koneksi, 'tugas');

$nama_tmp = $_POST['nama'];
$ket = $_POST['keterangan'];
$latling = $_POST['latlng'];


$query = "insert into tempat (nama_tmp,ket_tmp,latling) values('$nama_tmp','$ket','$latling')";
if(mysqli_query($koneksi,$query)){
	header('location:carirute.php');
}
?>