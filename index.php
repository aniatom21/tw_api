<?php
$api_key='your spi key';
$res_id='f2e5503e927d-4ad3-9500-4ab9e55deb59';
$line_type='2';

$curl = curl_init('https://api.um.warszawa.pl/api/action/busestrams_get/?resource_id='.$res_id.'&apikey='.$api_key.'&type='.$line_type);
echo curl_exec($curl);
curl_close($curl);
?>
