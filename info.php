<?php

$title = "Információ";

$beiras = $_POST['email'] ?? null;





?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="icon" href="img/plane.png"/>
    <link rel="shortcut icon" href="img/plane.png"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./style.css">
</head>
<body>


<?php

include "nav.php";

?>

<h3>Oldal</h3>
<ul>
<li>Ezen az oldalon megtudhatod, bizonyos repülőterek járatainak fontos adatait.</li>
<li>Van térképünk is hol tájékozodhatsz arról, hogy egy adott repülőtéren, éppen hol járnak a repülők.</li>
</ul>


<h3>Rólunk</h3>

Olvasson többet <a href="about.php">ezen</a> a linken


Bármi kérdés van írja meg a bruh@gmail.com címre, vagy tegye fel itt.

<form method="post">
<ul>
<li>
<label for="nev"> Név
<input type="text" id="nev" name="nev">
</li>
<li>
<label for="exampleInputEmail1">Email cím</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Soha ne ossza meg másokkal</small>
</li>
<li>
<label for="iras"> írja be a kérdését</label>
<textarea id="iras"col="30" row="45"></textarea>
<input class="btn btn-primary" type="submit">
</li>
</ul>
</form>



    
</body>
</html>