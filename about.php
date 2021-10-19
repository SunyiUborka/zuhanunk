<?php

$title = "Rólunk";


?>



<!DOCTYPE html>
<html lang="hu">
<head>
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

<h1>Üdvözlünk az oldalon</h1>

<p>
Mi vagyunk az ASTP. Repüljünk együtt!</p>

Amiért érdemes minket választani:

<ul>
    <li>Gépeink gyorsak, biztonságosak</li>
    <li>Általában nem késnek</li>
    <li>Olcsók</li>
</ul>

<form>

<label for="kerdes">Bármi kérdésed van, írj nekünk

<textarea id="kerdes" name="kerdes" col="5" row="6">


</textarea>

</label>

</form>

</body>
</html>