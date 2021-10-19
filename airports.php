
<?php
include_once("config.php");
$queryString = http_build_query([
    'access_key' => $APIKEY
  ]);

  $ch = curl_init(sprintf('%s?%s', 'http://api.aviationstack.com/v1/airports', $queryString));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $json = curl_exec($ch);
  curl_close($ch);

  $api_result = json_decode($json, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Repülőterek</title>
</head>
<body>
<?php
include_once("nav.php");
?>
<div class="container-fluid">
    <div class="row">
    <table class="table">
    <thead>
        <tr>
            <th>
                Repülőtér
            </th>
            <th>
                Ország
            </th>
            <th>
                Időzóna
            </th>
            <th>
                GMT
            </th>
        </tr>
    </thead>
    <?php foreach ($api_result['data'] as $flight):?>
    <tbody>
        <tr>
            <td><?=$flight["airport_name"]?></td>
            <td><?=$flight["country_name"]?></td>
            <td><?=$flight["timezone"]?></td>
            <td><?=$flight["gmt"]?></td>
        </tr>     
    </tbody>
    <?php endforeach?>
</table>
    </div>
</div>
</body>
</html>