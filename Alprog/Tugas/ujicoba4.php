<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Pencarian Rute Terpendek</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      #panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
	var rendererOptions = {
    draggable: true
  };
var directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
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
["<?php echo $data['nama_tmp'];?>", <?php echo $data['latling']; ?> ,1,
"<h4><?php echo $data['nama_tmp'];?></h4><p><?php echo $data['ket_tmp'];?></p>"],
 <?php
     }
	 ?>
	 ];
  directionsDisplay = new google.maps.DirectionsRenderer();
  var chicago = new google.maps.LatLng(-3.6934593,128.1846846,15);
  var mapOptions = {
    zoom: 16,
    center: chicago
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
        summaryPanel.innerHTML += '<b>Rute yang dilalui: ' + routeSegment + '</b><br>';
        summaryPanel.innerHTML += route.legs[i].start_address + ' ke ';
        summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
        summaryPanel.innerHTML += 'Jarak Yang ditempuh = ' +route.legs[i].distance.value + ' Meter <br>';
		summaryPanel.innerHTML += 'Waktu yang ditempuh = ' +route.legs[i].duration.value + ' Detik <br><br>';
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

                if(confirm("Tandai Titik Ini? (klik pada tanda yang muncul untuk melihat pilihan)")){
                    var lat = event.latLng.lat();
                    var lng = event.latLng.lng();
                    var form = '<h4>Tambah Data</h4><form id="formtambahdata" method="post" action="simpan.php"><br><input type="text" id="nama" 						                               placeholder="nama tempat" name="nama"><br><textarea id="keterangan" name="keterangan" placeholder="Isi Keterangan                               tempat"></textarea><br><input type="text" id="latlng" name="latlng" value="'+lat+','+lng+'"><br><input type="submit"                               value="Simpan"></form>';
                    
			
                    var siteLatLng = new google.maps.LatLng(lat, lng);
                    var marker = new google.maps.Marker({
                            position: siteLatLng,
                            map: map,
                            title: "add data",
                            zIndex: 100,
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
  </head>
  <body>
    <div id="map-canvas" style="float:left;width:70%;height:100%;"></div>
    <div id="control_panel" style="float:right;width:30%;text-align:left;padding-top:20px">
    <div style="margin:20px;border-width:2px;">
    <b>Lokasi Awal:</b>
    <select id="start">
      <option value="-3.6936463371005,128.181148767471 ">Pattmura Park</option>
      <option value="Swiss-Belhotel Ambon">Swiss-Belhotel Ambon</option>
      <option value="-3.693458, 128.176557">Pelabuhan Yos Sudarso</option>
      <option value="-3.689025, 128.182200">Terminal MArdika</option>
    </select>
    <br>
    <b>Lokasi Yang dikunjungi:</b> <br>
    <i>(Ctrl-klik untuk pemilihan tempat lebih dari satu)</i> <br>
    <select multiple id="waypoints">
      <option value=" 	-3.6983291911512546,128.18032264709473">Toko Besi Putih Maluku</input>
      <option value="-3.693606365936857,128.18548321723938">Toko Cahaya Liembers 	</input>
      <option value="-3.69372663622022,128.1787347793579">Toko Manise</input>
	  
    </select>
    <br>
    <b>Lokasi Akhir:</b>
    <select id="end">
      <option value="-3.698554, 128.180162">Tugu Trikora</option>
     <option value="-3.69664951923171, 128.178498744964">Tujuan 1</option>
    </select>
    <br>
      <input type="submit" onClick="calcRoute();" value="Cari rute">
    </div>
    <div id="directions_panel" style="margin:20px;background-color:#FFEE77;"></div>
    </div>
  </body>
</html