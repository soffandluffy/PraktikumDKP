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

<meta name="keywords" content="" />
<meta name="Premium Series" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
						
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
			<li class="current_page_item"><a href="loginadmin.php">Halaman Utama </a></li>
			<li><a href="datatempat.php">Kelola data </a></li>
			<li><a href="carirute.php">Pencarian jalur </a></li>
			<li><a href="manualpakai.php">Manual Pakai </a></li>
			<li><a href="kontak.php">kontak</a></li>
		</ul>
		<ul id="feed">
			<li><a href="dataadmin.php">Data Admin</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	
</div>
<!-- end header -->
<div id="wrapper">
	<!-- start page -->
	<div id="page">
		<div id="sidebar1" class="sidebar">
			<ul>
				<li>
					<h2>&nbsp;</h2>
					<ul>
						
					</ul>
				</li>
				
				
		  </ul>
		</div>
		<!-- start content -->
		
		<div id="content">
			
			<div class="post">
				<h1 class="title"><a href="#">Berhasil Menghapus Data !</a></h1>
				<p class="byline"><small>Posted on Juni, 2015 by <a href="#">Yudi Eko Windarto </a></small></p>
			    <div class="entry">
			
 <?php

$koneksi = mysql_connect("localhost", "root", "") or die("Gagal konek ke server.");

mysqli_select_db($koneksi,"tugas") or die("Gagal membuka database.");


$user = $_GET['user'];


mysqli_query($koneksi,"delete from admin where user='$user'") or die("Gagal menghapus data.");

mysqli_close($koneksi);

?>

<p>Data sudah terhapus. Silakan dicek di <a href="dataadmin.php">DATA ADMIN</a></p>

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
	<p class="copyright">&copy;&nbsp;&nbsp;2017 All Rights Reserved &nbsp;&bull;&nbsp; Yudi Eko Windarto .</p>
	<p class="link">Magister Sistem Informasi Universitas Diponegoro<a href="#">.</a></p>
</div>
<div align=center></div>
</body>
</html>
