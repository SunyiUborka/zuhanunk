<?php
    include_once("config.php");
    include_once("src/app/model/Airports.php");
    $queryString = http_build_query([
        'access_key' => $APIKEY
    ]);
    $ch = curl_init(sprintf('%s?%s', 'http://api.aviationstack.com/v1/airports', $queryString));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);
    curl_close($ch);
    $api_result = json_decode($json, true);

    use app\model\Airports;

    $arr = array();
    foreach($api_result['data'] as $flight) {
        $s = new Airports($flight["airport_name"], $flight["country_name"], $flight["timezone"], $flight["gmt"], $flight["iata_code"]);
        array_push($arr, $s);
    }
?>