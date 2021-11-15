<?php
    include_once("config.php");
    include_once("src/app/model/Arrival.php");
    $airport = $_GET["airport"];
    $queryString = http_build_query([
        'access_key' => $APIKEY,
        'arr_iata' => $airport
    ]);
    $ch = curl_init(sprintf('%s?%s', 'http://api.aviationstack.com/v1/flights', $queryString));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);
    curl_close($ch);
    $api_result = json_decode($json, true);

    use app\model\Arrival;

    $arr = array();
    foreach($api_result['data'] as $flight) {
        $s = new Arrival(
            $flight['arrival']['scheduled'],
            $flight['departure']['airport'],
            $flight['airline']['name'],
            $flight['flight']['number'],
            $flight['arrival']['terminal'],
            $flight['arrival']['actual'] ?? $flight['arrival']['scheduled'],
            $flight['flight_status']
        );
        array_push($arr, $s);
    }
?>