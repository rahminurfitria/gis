<?php

require ('config.php');

$sql = mysql_query("SELECT nama,latitude,longitude,alamat from shop");

while ($row = mysql_fetch_assoc($sql)) 
$cabang[] = $row;

$json = json_encode($cabang);

echo $json;
?>