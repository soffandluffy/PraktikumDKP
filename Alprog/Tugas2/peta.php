<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
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
  </head>
  <body>
  <form name="form1" method="post" action="">
    <table width="335" border="1">
      <tr>
        <td width="118">lintang</td>
        <td width="201"><label>
          <input type="text" name="textfield">
        </label></td>
      </tr>
      <tr>
        <td>bujur</td>
        <td><label>
          <input type="text" name="textfield2">
        </label></td>
      </tr>
      <tr>
        <td colspan="2"><label>
          <div align="center">
            <input type="submit" name="Submit" value="Tambah">
            </div>
        </label></td>
      </tr>
    </table>
  </form>
  <div id="map-canvas" style="width: 600px ; height: 300px; "></div>
  
  </body>
</html>