<?php

$title = "Rólunk";


use app\model\Repulo;



?>







<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/plane.png"/>
    <link rel="shortcut icon" href="img/plane.png"/>
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./style.css">
</head>



<body>

<?php
include "nav.php";
?>

<div class="container">

<div class="row">

<div class="col-12">

<h1>Üdvözlünk az oldalon</h1>

<p>
Mi vagyunk az ASTP. Repüljünk együtt!</p>


<img src="img/forepulo.jpg" alt="forepulo">





<p>

Az ASTP 13 évvel ezelőtt jelent meg. 



</p>

<ul>

<li>,</li>
<li>  </li>
<li>  műszaki repülésügyi szabályok kidolgozása,</li>
<li>   légi járművek és komponensek típusalkalmassági tanúsítása,</li>
<li>  a repüléstechnikai termékeket tervező, gyártó és karbantartó cégek jóváhagyása,</li>
<li>  repülésbiztonsági felügyelet és támogatás biztosítása az uniós országok számára (lásd: légi műveletek, légi forgalmi szolgáltatások),</li>
<li>   európai és globális biztonsági normák előmozdítása,</li>
<li>   együttműködés a nemzetközi érdekelt felekkel az európai repülésbiztonság javítása érdekében (lásd az ún. európai repülésbiztonsági listát, az Európai Unióban működési tilalom vagy működési korlátozások alá helyezett légitársaságok európai jegyzékét).</li>

</ul>


<h3>Mitől vagyunk jó csapat?</h3>
<p>

A csapat nem annyira, !

</p>




Amiért érdemes minket választani:






<ul>
    <li>Gépeink gyorsak, biztonságosak</li>
    <li>Általában nem késnek</li>
    <li>Olcsók</li>
</ul>

<form method="get">

<label for="kerdes">Bármi kérdése van, írjon nekünk

<textarea id="kerdes" name="kerdes" col="5" row="6">


</textarea>

</label>

<input type="submit">


</form>
</div>
</div>
</div>

</body>
</html>