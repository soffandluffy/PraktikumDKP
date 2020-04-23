<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<style>
   html { height: 100% }
   #panel{padding:5px;}
      .input {
   height: 25px;
   padding: 2px;
   width: 200px;
      }
   #btn{
     height: 31px;
     background: #267BA8;
     border: none;
     padding: 5px;
     color: #fff;
   }
   #directions-panel {
        height: 100%;
        float: right;
        width: 300px;
        overflow: inherit;
      }
   #map-canvas { height: 700px;}
   *{
   margin: 0;
   padding: 0;
  }
  body {
   text-align:center;
   background-color:#61b3de;
   font-family:Arial, Helvetica, sans-serif;
   font-size:80%;
   color:#666;
  }

  h1 {
   font-family:Georgia, "Times New Roman", Times, serif;
   font-size:24px;
   color:#645348;
   font-style:italic;
   text-decoration:none;
   font-weight:100;
   padding: 10px;
  }
  .copy{
   margin-top: 20px;
   clear: both;
  }
  @media print {
   #map-canvas {
     height: 700px;
     margin: 0;
   }

   #directions-panel {
     float: none;
     width: 100%;
   }
    }
    </style>



 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
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

                        ["<?php echo $data['nama_tmp'];?>", <?php echo $data['latling']; ?> ,1, "<h4><?php echo $data['nama_tmp'];?></h4><p><?php echo $data['ket_tmp'];?></p>"],
                        
                        <?php
                    }

                ?>

            ];
    var latlng = new google.maps.LatLng(-3.6934593,128.1846846,15);
    var mapOptions = {
   zoom: 16,
   center: latlng
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById('directions-panel'));    
    calcRoute();

	

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
    var request = {
     origin:start,
     destination:end,
     travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
   if (status == google.maps.DirectionsStatus.OK) {
     directionsDisplay.setDirections(response);
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
                    var form = '<h4>Tambah Data</h4><form id="formtambahdata" method="post" action="simpan.php"><br><input type="text" id="nama" placeholder="nama tempat" name="nama"><br><textarea id="keterangan" name="keterangan" placeholder="Isi Keterangan tempat"></textarea><br><input type="text" id="latlng" name="latlng" value="'+lat+','+lng+'"><br><input type="submit" value="Simpan"></form>';
                    
			
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

<body>
 <div class="wrap">
 
  <div id="panel">
    <input class="input" id="start" type="text" value="Pattimura Park">
    <input class="input" id="end" type="text" value="Trikora ambon">
    <input id="btn" type="button" value="Search" onclick="calcRoute()">
  </div>
<div id="map-canvas"></div>

 </div> 



</body>
</html>

