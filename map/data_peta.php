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
	</tr>
<?php $no=1;
while ($peta = mysql_fetch_array($data)) {
	echo '<tr>
			<td>'.$no++.'</td>
			<td>'.$peta['nama'].'</td>
			<td>'.$peta['lat'].'</td>
			<td>'.$peta['lng'].'</td>
		</tr>';
}
?>
</table>

<a href="index.php"> Kembali</a>