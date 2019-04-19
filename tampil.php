<?php

header('Content-Type: application/json');

$link = mysqli_connect('localhost','u6184873_admin','warungfinder123');
mysqli_select_db($link, 'u6184873_warungfinder');

$position = explode(',', trim(urldecode($_GET['position'])));

$sql = "SELECT id, namaWarung, alamat, latitude, longitude, kategori,
		(6371 * acos(cos(radians(".$position[0].")) 
		* cos(radians(latitude)) * cos(radians(longitude) 
		- radians(".$position[1].")) + sin(radians(".$position[0].")) 
		* sin(radians(latitude)))) 
		AS jarak 
		FROM warung 
		HAVING jarak <= ".$_GET['jarak']." 
		ORDER BY jarak";

$data   = mysqli_query($link, $sql);
$json   = array();
$output = array();
$i = 0;

if (!empty($data)) {
	$json = '{"data": {';
	$json .= '"warung":[ ';
	while($x = mysqli_fetch_array($data)){
	    $json .= '{';
	    $json .= '"id":"'.$x['id'].'",
	    		 "namaWarung":"'.htmlspecialchars_decode($x['namaWarung']).'",
	    		 "alamat":"'.htmlspecialchars_decode($x['alamat']).'",
			     "latitude":"'.$x['latitude'].'",
			     "longitude":"'.$x['longitude'].'",
                 "kategori":"'.$x['kategori'].'",
			     "jarak":"'.$x['jarak'].'"
	             },';
	}
 
	$json = substr($json,0,strlen($json)-1);
	$json .= ']';
	$json .= '}}';
	 
	echo $json;
} 
