<?php
    include_once("config.php");
    include_once("src/app/apis/airports.php");
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
        <div class="col">
            <h1>
            <i class='bx bx-radar' ></i>BruhRadar
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col src">
            <form method="get">
                <label for="srcport" class="srclab">Válassz egy repülőteret</label>
                <input list="srcports" name="airport" class="search" id="srcport">
                <datalist id="srcports">
                <?php foreach ($arr as $flight):?>
                    <option value="<?=$flight->getAirportName()?>">
                <?php endforeach ?>
                </datalist>
                <button class="btnsrc" list="src">Keresés</button>
</form>
        </div>
    </div>
</div>
</body>
</html>
