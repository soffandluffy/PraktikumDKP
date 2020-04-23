<?php
include("config.php");
session_start();
if(@$_SESSION["username"] or @$_SESSION["password"]){
header("location:loginadmin.php"); //jika session username atau password ada maka alihkan ke halaman index
}else{
//jika kedua session itu tidak ada maka tampilkan halaman login ini
?>
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
<title></title>
<meta name="keywords" content="" />
<meta name="Premium Series" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style4 {color: #FF0000; font-size: 2em; }
.style5 {font-size: 10px}
.style9 {font-size: 14px}
.style14 {color: #FFFFFF; }
.style15 {color: #FFFFFF; font-size: 24px; }
.style16 {font-size: 16px}
-->
</style>
</head>
<?php
//PROSES LOGIN
if(@$_POST["Submit"]){
$user = $_POST["user"];
$pass = $_POST["pass"];
$cek = mysqli_query($koneksi,"select*from admin where user='$user' and pass='$pass' LIMIT 1");
$hit = mysqli_num_rows($cek);
if($hit < 1){
echo"
<script>
alert('MAAF LOGIN GAGAL');
history.back();
</script>
";
}else{
$_SESSION["username"] = 1;
$_SESSION["password"] = 1;
header("location:loginadmin.php");
}
}
?>
<body>
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="#"><span>Sistem Informasi Geografis </span> Pencari Rute Terpendek</a></h1>
		<p></p>
	</div>
	<div id="menu">
		<ul id="main">
			<li class="current_page_item"><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
		</ul>
		<ul id="feed">
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
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
					<h2>Daftar Produk </h2>
					<ul>
						<li><a href="http://www.swiss-belhotel.com/en/Indonesia/Ambon/ambon#hotel+information" target="_blank">Kerajinan Kulit Kerang  </a></li>
						<li><a href="https://www.google.co.id/?gws_rd=cr&ei=xMDKVdfNMdCkuQTc6JjwBg#q=kerajinan+kulit+kerang" target="_blank">Kerajinan Cangkang Mutiara </a></li>
						<li><a href="https://www.google.co.id/?gws_rd=cr&ei=xMDKVdfNMdCkuQTc6JjwBg#q=minyak+kayu+putih" target="_blank">Minyak Kayu Putih </a></li>
						<li><a href="https://www.google.co.id/?gws_rd=cr&ei=xMDKVdfNMdCkuQTc6JjwBg#q=ikan+asar" target="_blank">Ikan Asar </a></li>
						<li><a href="https://www.google.co.id/?gws_rd=cr&ei=xMDKVdfNMdCkuQTc6JjwBg#q=kain+tenun+maluku" target="_blank">Kain Tenun Maluku </a></li>
						<li><a href="https://www.google.co.id/?gws_rd=cr&ei=xMDKVdfNMdCkuQTc6JjwBg#q=kain+batik+corak" target="_blank">Kain Batik corak  </a></li>
						<li><a href="https://www.google.co.id/?gws_rd=cr&ei=xMDKVdfNMdCkuQTc6JjwBg#q=manisan+pala" target="_blank">Jus &amp; Manisan Buah Pala </a></li>
						<li><a href="https://www.google.co.id/?gws_rd=cr&ei=xMDKVdfNMdCkuQTc6JjwBg#q=aksesoris+besi+putih" target="_blank">Aksesoris Besi Putih </a></li>
						
					</ul>
				</li>
				<li>
					<h2> </h2>
				</li>
			</ul>
	  </div>
		<!-- start content -->
		<div id="content">
			
			<div class="post">
				<h1 class="title"><a href="#" class="style4">Selamat datang!</a></h1>
				<p class="byline"><small>Posted on, 2016 by <a href="#">Admin </a></small></p>
				<div class="entry">
				
				<img src="latar.gif" alt="" />
				<form name="form1" method="post" action="">
				  <table width="486" border="0" align="center">
    <tr bgcolor="#760314">
      <td colspan="2"><div align="center" class="style15">Login Administrator </div></td>
      </tr>
    <tr>
      <td><span class="style16">Username</span></td>
      <td><label>
        <input type="text" name="user">
      </label></td>
    </tr>
    <tr>
      <td><span class="style16">Password</span></td>
      <td><label>
        <input type="password" name="pass">
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>

          <div align="center">
            <input type="submit" name="Submit" value="Masuk" style="width: 100px" />
            <input type="reset" name="Submit2" value="Reset" style="width: 100px" />
            </div>
        </label></td>
    </tr>
    <tr bgcolor="#6F0217">
      <td colspan="2"><div align="center" class="style14"><span class="style9">Pengguna Biasa Klik <strong><a href="loginuser.php" class="style14">disini</a></strong></span> </div></td>
    </tr>
  </table>
</form>
</div>
			</div>
		</div>
		<!-- end content -->
		<!-- start sidebars -->
		<div id="sidebar2" class="sidebar">
			<ul>
			  <li>
			    <h2>Judul</h2>
			    <p align="justify" class="tag"><span class="style5"><a href="#"> Greedy Distributed Spanning Tree Routing untuk pencarian rute terpendek berbasis Sistem informasi Geografis </a></span></p>
			  </li>
			  <li></li>
				<li>
					<h2> </h2>
					<ul>
					
					</ul>
				</li>
			</ul>
		</div>
		<!-- end sidebars -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end page -->
</div>
<div id="footer">
	<p class="copyright">&copy;&nbsp;&nbsp;2015 All Rights Reserved &nbsp;&bull;&nbsp; Design by Admin <a href="http://www.freecsstemplates.org/"></a>.</p>
	<p class="link">Universitas Diponegoro. </p>
</div>
<div align=center></div>
</body>
</html>
<?php
}
?>
