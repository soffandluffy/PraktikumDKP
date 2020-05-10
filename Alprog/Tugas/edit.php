<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type=”image/png” href= "logo.png"   />
<script language='JavaScript'>
var txt="Pencari Rute Terpendek     ";
var kecepatan=300;var segarkan=null;function bergerak() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
</script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
<title>Premium Series by Free CSS Templates</title>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBJySUCJgkSTSzYotFOAZLI9EKAXBk6sGk&sensor=false"></script>
    <script>
function initialize() {
<?php
$koneksi = mysqli_connect('localhost','root','4dm1n54bo');
mysqli_select_db($koneksi, 'tugas');


$latling = $_GET['latling'];

$query = "select * from tempat where latling='$latling'";
$hasil = mysqli_query($koneksi,$query);
$row = mysqli_fetch_array($hasil);
mysqli_close($koneksi);
?>
  var myLatlng = new google.maps.LatLng(<?php echo $row['1']; ?>);
 var mapOptions = {
    zoom: 16,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
 
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: ''
  });
 }
 
google.maps.event.addDomListener(window, 'load', initialize);
 
    </script>

<meta name="keywords" content="" />
<meta name="Premium Series" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" /> <link rel="stylesheet" type="text/css" href="custom.css">
						
<style type="text/css">
<!--
.style3 {font-size: 16px; font-weight: bold; color: #000000; }
.style4 {color: #FFFFFF}
.style5 {color: #000000}
.style6 {font-size: 16px; font-weight: bold; color: #FFFFFF; }
.style7 {color: #FF0000}
-->
</style>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="#"><span>sistem Informasi Geografis </span> Pencari Rute Terpendek</a></h1>
		<p></p>
	</div>
	<div id="menu">
		<ul id="main">
			<li class="current_page_item"><a href="loginuser.php">Halaman Utama </a></li>
			<li><a href="#">Kelola data </a></li>
			<li><a href="#">Pencarian jalur </a></li>
			<li><a href="#">Manual Pakai </a></li>
			<li><a href="#">kontak</a></li>
		</ul>
		<ul id="feed">
			<li><a href="#">Data Admin</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	
</div>
<!-- end header -->
<div id="wrapper">
	<!-- start page -->
	<div id="page">
	  <!-- start content -->
<div id="content">
			
			<div class="post">
				<h1 class="title"><a href="#">Silahkan isi data baru </a></h1>
				<p class="byline"><small>Posted on April, 2015 by <a href="#">Putra casmedi </a></small></p>
			  <div class="entry">
			  
			  <div id="map-canvas" style="width: 950px; height: 400px; ">				</div>
			  
			
<?php
$koneksi = mysqli_connect('localhost','root','4dm1n54bo');
mysqli_select_db($koneksi, 'tugas');


$latling = $_GET['latling'];

$query = "select * from tempat where latling='$latling'";
$hasil = mysqli_query($koneksi,$query);
$row = mysqli_fetch_array($hasil);
mysqli_close($koneksi);
?>

<form name="form1" method="post" action="edit2.php">
<input type="hidden" name="latling" value="<?php echo $row['latling']; ?>" />
<table width="697" border="0">
<tr>
<td width="71">Koordinat (Lintang, Bujur) </td>
<td width="4">:</td>
<td width="600"><?php echo $row['latling']; ?></td>
</tr>
<tr>
<td>Nama Tempat</td>
<td>:</td>
<td><input name="nama_tmp" type="text" value="<?php echo $row['nama_tmp']; ?>" size="100" /></td>
</tr>
<tr>
<td>Keterangan </td>
<td>:</td>
<td><textarea name="ket_tmp" cols="50" type="text"/> <?php echo $row['ket_tmp']; ?> </textarea></td>
</tr>
<tr>
<td colspan="3"><input type="submit" name="submit" value="Ubah" /></td>
</tr>
</table>
</form>
<p>Batal mengedit data. Kembali ke <a href="datatempat.php">Data Tempat</a></p> 
 </br>
 </br>
			  </div>
			</div>
	  </div>
		
		<!-- end content -->
		<!-- start sidebars -->
		<!-- end sidebars -->
<div style="clear: both;">&nbsp;</div>
  </div>
	<!-- end page -->
</div>
<div id="footer">
	<p class="copyright">&copy;&nbsp;&nbsp;2015 All Rights Reserved &nbsp;&bull;&nbsp; Design by Putra Casmedi .</p>
	<p class="link">Magister Sistem Informasi Universitas Diponegoro<a href="#">.</a></p>
</div>
<div align=center></div>
</body>
</html>
