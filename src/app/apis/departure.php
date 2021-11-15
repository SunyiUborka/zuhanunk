<?php

include_once("config.php");
include_once("src/app/model/Departure.php");
$airport = $_GET["airport"];
$queryString = http_build_query([
    'access_key' => $APIKEY,
    'dep_iata' => $airport
]);
$ch = curl_init(sprintf('%s?%s', 'http://api.aviationstack.com/v1/flights', $queryString));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($ch);
curl_close($ch);
$api_result = json_decode($json, true);

use app\model\Departure;

$arr2 = array();
foreach ($api_result['data'] as $flight) {
    $s = new Departure(
        $flight['departure']['scheduled'],
        $flight['arrival']['airport'],
        $flight['airline']['name'],
        $flight['flight']['number'],
        $flight['departure']['terminal'],
        $flight['departure']['actual'] ?? $flight['departure']['scheduled'],
        $flight['flight_status']
    );
    array_push($arr2, $s);
}
