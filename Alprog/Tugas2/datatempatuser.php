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
			<li class="current_page_item"><a href="loginuser.php">Halaman Utama </a></li>
			<li><a href="datatempatuser.php">lihat data </a></li>
			<li><a href="carirute.php">Pencarian jalur </a></li>
			<li><a href="manualpakai.php">Manual Pakai </a></li>
			<li><a href="kontak.php">kontak</a></li>
		</ul>
		<ul id="feed">
			<li></li>
			<li></li>
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
				<h1 class="title"><a href="#">Kelola Data Tempat </a></h1>
				<p class="byline"><small>Posted on , 2015 by <a href="#">Yudi Eko Windarto </a></small></p>
			  <div class="entry">
			
			<table width="705" border="2" align="center" cellpadding="2" cellspacing="2">
  <tr bordercolor="#E5E5E5" bgcolor="#7E0A15">
    <td width="189"><div align="center" class="style3 style4">Nama Tempat </div></td>
    <td width="289"><div align="center" class="style6">Koordinat</div></td>
	<td width="289"><div align="center" class="style6">Keterangan</div></td>
	<td width="91"><div align="center" class="style6">Ubah</div></td>
	<td width="98"><div align="center" class="style6">Hapus</div></td>
  </tr>

<?php
$db = 'tugas';
$koneksi = mysql_connect("localhost","root",""); 
mysqli_select_db($koneksi,$db,$konek);
$pilih = mysqli_query($koneksi,"select *from tempat ");
while ($row = mysqli_fetch_row($pilih)) {
?>
<tr>
    <td><?php echo $row[2];?> </td>
    <td><?php echo $row[1];?></td>
	<td><?php echo $row[3];?></td>
  </tr>
  <?php
  };
  ?>
  
</table> 
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


