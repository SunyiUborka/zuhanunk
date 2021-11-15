<?php
    include_once("config.php");
    include_once("src/app/apis/arrival.php");
    include_once("src/app/apis/departure.php");
    $airport = $_GET["airport"];
    $name = $_GET["name"];
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="icon" href="img/plane.png"/>
    <link rel="shortcut icon" href="img/plane.png"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zuhanunk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
include_once("nav.php");
?>
<div class="container-fluid">
    <div class="row">
        <h1><?=$name?> (<?=$airport?>)</h1>
    </div>
    <div class="row">
        <div class="col">
            <button class="btn" id="button">Érkező/Kimenő</button>
        </div>
        
    </div>
    <div class="row">
        <div class="col">
            <table class="table departure inactive" >
                <thead>
                    <tr>
                        <th>
                            Indulás
                        </th>
                        <th>
                            Hova
                        </th>
                        <th>
                            Légitársaság
                        </th>
                        <th>
                            Járatszám
                        </th>
                        <th>
                            Terminál
                        </th>
                        <th>
                            Statusz
                        </th>
                    </tr>
                </thead>

                <tbody>
                <?php foreach ($arr2 as $flight):?>

                    <tr>
                        <td><?=$flight->getTime()?></td>
                        <td><?=$flight->getWhere()?></td>
                        <td><?=$flight->getAirline()?></td>
                        <td><?=$flight->getPlaneNumber()?></td>
                        <td><?=$flight->getTerminal()?></td>
                        <td><?=$flight->getStatus()?></td>
                    </tr>

                <?php endforeach ?>
                </tbody>
            </table>
            <table class="table arrival">
                <thead>
                    <tr>
                        <th>
                            Érkezés	
                        </th>
                        <th>
                            Honnan
                        </th>
                        <th>
                            Légitársaság
                        </th>
                        <th>
                            Járatszám
                        </th>
                        <th>
                            Terminál
                        </th>
                        <th>
                            Statusz
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($arr as $flight):?>

                    <tr>
                        <td><?=$flight->getTime()?></td>
                        <td><?=$flight->getFrom()?></td>
                        <td><?=$flight->getAirline()?></td>
                        <td><?=$flight->getPlaneNumber()?></td>
                        <td><?=$flight->getTerminal()?></td>
                        <td><?=$flight->getStatus()?></td>
                    </tr>

                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
        let btn1 = document.querySelector("#button");

        let table1 = document.querySelector(".arrival");
        let table2 = document.querySelector(".departure");
        
        btn1.onclick = function(){
            table1.classList.toggle("inactive");
            table2.classList.toggle("inactive");
        }
    </script>
</body>
</html>