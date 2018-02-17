<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 500px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <a href="form_peta.php">Tambah Data</a>
    <h2>Data Peta</h2>
<?php
include "koneksi.php";
$data = mysql_query("SELECT * FROM peta");
// 
// $ada = mysqli_fetch_array($data);
// print_r($ada);
?>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama Lokasi</th>
		<th>Latitude</th>
		<th>Longitude</th>
		<th>Aksi</th>
	</tr>
<?php $no=1;
while ($peta = mysql_fetch_array($data)) {
	echo '<tr>
			<td>'.$no++.'</td>
			<td>'.$peta['nama'].'</td>
			<td>'.$peta['lat'].'</td>
			<td>'.$peta['lng'].'</td>
			<td><a href="">Edit </a> | <a href="hapus_peta.php?id='.$peta['id'].'">Hapus</a></td>
		</tr>';
}
?>
</table>
    <script>
      function initMap() {
        var lombok = {lat: -8.6981606, lng: 116.2442994};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: lombok
        });

        <?php 
        	include "koneksi.php";
       		$data = mysql_query("SELECT * FROM peta");
	        while ($peta = mysql_fetch_array($data)) {
	     ?>
			var lokasi<?php echo $peta['id'] ?> = new google.maps.Marker({
	          position: {
				          	lat: <?php echo $peta['lat'] ?>, 
				          	lng: <?php echo $peta['lng'] ?>
				          },
	          map: map
	        });
		<?php } ?>
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYQqqe9vWTQNrf2pv3C9fdzAbukst7cKk&callback=initMap&libraries=places">
    </script>
  </body>
</html>