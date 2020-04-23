<html >
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
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBJySUCJgkSTSzYotFOAZLI9EKAXBk6sGk&sensor=false"></script>
    <script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;


function initialize() {
	var sites = [
<?php
     $koneksi = mysqli_connect('localhost','root','4dm1n54bo');
     mysqli_select_db($koneksi, 'tugas');
     $query="select * from tempat";
     $datas = mysqli_query($koneksi,$query);
     while ($data=mysqli_fetch_array($datas)) {
     ?>
["		<?php echo $data['nama_tmp'];?>", 
		<?php echo $data['latling']; ?> ,1,
"<h4>	<?php echo $data['nama_tmp'];?>
</h4><p><?php echo $data['ket_tmp'];?></p>"],
 <?php
     }
	 ?>
	 ];
  directionsDisplay = new google.maps.DirectionsRenderer();
  var pusat = new google.maps.LatLng(-6.984175828310258,110.41000896684636);
  var mapOptions = {
    zoom: 15,
    center: pusat
  }
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  directionsDisplay.setMap(map);
  setMarkers(map, sites); // memanggil fungsi setMarker untuk menandai titik di peta.
            setAction(map);  //tambahan dari tutorial 2 untuk memanggil fungsi setAction(map);
            infowindow = new google.maps.InfoWindow({
                    content: "loading..."
                });

            var bikeLayer = new google.maps.BicyclingLayer();
            bikeLayer.setMap(map);  //memnunculkan peta
}

function calcRoute() {
  var start = document.getElementById('start').value;
  var end = document.getElementById('end').value;
  var waypts = [];
  var checkboxArray = document.getElementById('waypoints');
  for (var i = 0; i < checkboxArray.length; i++) {
    if (checkboxArray.options[i].selected == true) {
      waypts.push({
          location:checkboxArray[i].value,
          stopover:true});
    }
  }

  var request = {
      origin: start,
      destination: end,
      waypoints: waypts,
      optimizeWaypoints: true,
      travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
      var route = response.routes[0];
      var summaryPanel = document.getElementById('directions_panel');
      summaryPanel.innerHTML = '';
      // For each route, display summary information.
      for (var i = 0; i < route.legs.length; i++) {
        var routeSegment = i + 1;
        summaryPanel.innerHTML += '<b>Rute Tujuan ke-' + routeSegment + '</b><br>';
        summaryPanel.innerHTML += route.legs[i].start_address + ' ke ';
        summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
        summaryPanel.innerHTML += 'Jarak Yang ditempuh = ' +route.legs[i].distance.value + ' Meter <br>';
		summaryPanel.innerHTML += 'Waktu yang ditempuh = ' +((route.legs[i].duration.value / 2)+30) + ' Detik <br><br>';
      }
    }
  });
}

function setMarkers(map, markers) {
              //berikut merupakan perulangan untuk membaca masing masing titik yang telah kita definisikan di sites[];
            for (var i = 0; i < markers.length; i++) {
                var sites = markers[i];
                var siteLatLng = new google.maps.LatLng(sites[1], sites[2]);
                var marker = new google.maps.Marker({
                    position: siteLatLng,
                    map: map,
                    title: sites[0],
                    zIndex: sites[3],
                    html: sites[4]

                });
				
	var contentString = "Some content";
                // berikut merupakan fungsi untuk mengatur agar keterangan marker muncuk ketika mouse diarahkan ke marker (mouse over)
                google.maps.event.addListener(marker, "mouseover", function () {
                   
                    infowindow.setContent(this.html);
                    infowindow.open(map, this);
                });
            }
        }	
		function setAction(map){
                
                google.maps.event.addListener(map, "rightclick", function(event) {

                if(confirm("Tandai Titik Ini? (klik pada tanda yang muncul untuk mengisi form)")){
                    var lat = event.latLng.lat();
                    var lng = event.latLng.lng();
                    var form = '<h4>Tambah Data</h4><form id="formtambahdata" method="post" action="simpanadmin.php"><br><input type="text" id="nama" 						                               placeholder="nama tempat" name="nama"><br><textarea id="keterangan" name="keterangan" placeholder="Isi Keterangan                               tempat"></textarea><br><input type="text" id="latlng" name="latlng" value="'+lat+','+lng+'"><br><input type="submit"                               value="Simpan"></form>';
                    
			
                    var siteLatLng = new google.maps.LatLng(lat, lng);
                    var marker = new google.maps.Marker({
                            position: siteLatLng,
                            map: map,
                            title: "Tambah Data",
                            zIndex: 1000,
                            html: form

                        });
                     google.maps.event.addListener(marker, "mouseover", function () {
                           
                            infowindow.setContent(this.html);
                            infowindow.open(map, this);
                        });

                }
               
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
		<h1><a href="#"><span>Sistem Informasi Geografis </span> Pencari Rute Terpendek</a></h1>
		<p></p>
	</div>
	<div id="menu">
		<ul id="main">
			<li class="current_page_item"><a href="loginadmin.php">Halaman utama </a></li>
			<li><a href="datatempat.php">Kelola data </a></li>
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
				<h1 class="title">Pencarian Rute Terpendek</h1>
				<p class="byline"><small>Posted on , 2016 by <a href="#">Administrator</a></small></p>
				<div class="entry">
				
	
    <div style="margin: 20px; border-width: 2px; text-align: center;"><br>
   
    <b>Titik Awal:</b>
    <select id="start">
      	<?php
		$db = 'tugas';
		$koneksi = Mysqli_connect("localhost","root","4dm1n54bo"); 
		Mysqli_select_db($koneksi,$db);
		$pilih = mysqli_query($koneksi,"select *from tempat ");
		while ($row = mysqli_fetch_array($pilih)) {
		echo "<option value=$row[latling]>$row[nama_tmp]</option>";
     	}
		?>
		</select>
    <br>
    <b>Lokasi yang Dikunjungi:</b> <br>
    <i>(Ctrl-klik untuk memilih tempat lebih dari satu)</i> <br>
    <select multiple id="waypoints">
	
    
    <?php
	$db = 'tugas';
	$koneksi = Mysqli_connect("localhost","root","4dm1n54bo"); 
	Mysqli_select_db($koneksi,$db);
	$pilih = mysqli_query($koneksi,"select *from tempat ");
	while ($row = mysqli_fetch_array($pilih)) {
	echo "<option value=$row[latling]>$row[nama_tmp]</value>";
     }
	 ?> 
     
	</select>
    <br>
    <b>Titik akhir:</b>
    <select name="end" id="end">
     
	<?php
	$db = 'tugas';
	$koneksi = Mysqli_connect("localhost","root","4dm1n54bo"); 
	Mysqli_select_db($koneksi,$db);
	$pilih = mysqli_query($koneksi,"select *from tempat ");
	while ($row = mysqli_fetch_array($pilih)) {

	echo "<option value=$row[latling]>$row[nama_tmp]</option>";
     }
	 ?>
	</select>
    <br>
      <input value = "Cari Rute" type="submit" onclick="calcRoute();">
    </div>
    <div id="map-canvas" style="width:950px;height:600px;"></div>
    <div id="control_panel" style="width:100%;text-align:center;padding-top:20px">
    
    <div id="directions_panel" style="margin:20px;background-color:#FFEE77;"></div>
    </div>
    
    
    
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
	<p class="copyright">&copy;&nbsp;&nbsp;2015 All Rights Reserved &nbsp;&bull;&nbsp; Design by Administrator .</p>
	<p class="link">Universitas Diponegoro<a href="#">.</a></p>
</div>
<div align=center></div>
</body>
</html>
