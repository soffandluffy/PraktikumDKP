
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
function initialize() {
  var myLatlng = new google.maps.LatLng(-3.6934593,128.1846846,15);
  var mapOptions = {
    zoom: 16,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
 
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
 
  var latlng2 = new google.maps.LatLng(-2.1248409,101.4273383);
  var marker = new google.maps.Marker({    
      position: latlng2,
      map: map,
      title: 'tes'
  });
 
}
 
google.maps.event.addDomListener(window, 'load', initialize);
 
    </script>
<meta name="keywords" content="" />
<meta name="Premium Series" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
						
<style type="text/css">
<!--
.style1 {color: #FF0000}
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
			<li class="current_page_item"><a href="index.php">Halaman utama </a></li>
			<li><a href="datatempatuser.php">Kelola data </a></li>
			<li><a href="carirute.php">Pencarian jalur </a></li>
			<li><a href="manualpakai.php">Manual Pakai </a></li>
			<li><a href="kontak.php">kontak</a></li>
		</ul>
		<ul id="feed">
			<li><a href="#"></a></li>
			<li><a href="logout.php"></a></li>
		</ul>
	</div>
	
</div>
<!-- end header -->
<div id="wrapper">
	<!-- start page -->
	<div id="page"><!-- start content -->
		
		<div id="content">
			
			<div class="post">
				<h1 class="title"><a href="#">Selamat datang Pengguna !</a></h1>
				<p class="byline"><small>Posted on , 2015 by <a href="#">Yudi Eko Windarto</a></small></p>
				<div class="entry">
				<p> untuk informasi lebih lanjut dapat menghubungi kontak dibawah ini:</p>
				<p>Mobile : 085233244144</p>
				<p>facebook : Yudi Eko Windarto</p>
				<p>email : yudiekow@gmail.com</p>
				<p>terima kasih</p>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
			  </div>
			</div>
		</div>
		
		<!-- end content -->
		<!-- start sidebars --><!-- end sidebars -->
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
