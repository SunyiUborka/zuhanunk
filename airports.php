
<?php

include_once("src/app/apis/airports.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/plane.png"/>
    <link rel="shortcut icon" href="img/plane.png"/>
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
            <h1>
                Repülőterek
            </h1>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <i class='bx bxs-plane-take-off' ></i>
                            Repülőtér
                        </th>
                        <th>
                            <i class='bx bx-map-pin' ></i>
                            Ország
                        </th>
                        <th>
                            <i class='bx bx-time-five'></i>
                            Időzóna
                        </th>
                        <th>
                            <i class='bx bx-timer'></i>
                            GMT
                        </th>
                        <th>
                            Járatok
                        </th>
                    </tr>
                </thead>
                <?php foreach ($arr as $flight):?>
                    <tbody>
                        <tr>
                            <td><?=$flight->getAirportName()?></td>
                            <td><?=$flight->getCountryName()?></td>
                            <td><?=$flight->getTimezone()?></td>
                            <td><?=$flight->getGmt()?></td>
                            <td><a href="airport.php?airport=<?=$flight->getIata()?>&name=<?=$flight->getAirportName()?>">Bővebben</a></td>
                        </tr>
                    </tbody>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</body>
</html>