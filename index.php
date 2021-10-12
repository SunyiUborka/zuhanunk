<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zuhanunk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav>
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bx-radar icon' ></i>
                    <div class="logo_name">BRUH</div>  
                <i class='bx bx-menu-alt-left' id="btn"></i>
            </div>
            <ul class="nav_list">
                <li>
                    <a href="">
                        <i class='bx bx-home' ></i>
                        <span class="links_name">Kezdőlap</span>
                    </a>
                    <span class="tooltip">Kezdőlap</span>
                </li>
                <li>
                    <i class='bx bx-search' ></i>
                    <input type="text" placeholder="Keresés...">
                    <span class="tooltip">Keresés</span>
                </li>
                <li>
                    <a href="">
                        <i class='bx bx-map-alt' ></i>
                        <span class="links_name">Térkép</span>
                    </a>
                    <span class="tooltip">Térkép</span>
                </li>
                <li>
                    <a href="">
                        <i class='bx bxs-plane-alt' ></i>
                        <span class="links_name">Repűlőterek</span>
                    </a>
                    <span class="tooltip">Repűlőterek</span>
                </li>
                <li>
                    <a href="">
                    <i class='bx bx-detail' ></i>
                        <span class="links_name">Rólunk</span>
                    </a>
                    <span class="tooltip">Rólunk</span>
                </li>
                <li>
                    <a href="">
                    <i class='bx bx-info-circle' ></i>
                        <span class="links_name">Információ</span>
                    </a>
                    <span class="tooltip">Információ</span>
                </li>
            </ul>
        </div>
    </nav>
    <?php
$queryString = http_build_query([
    'access_key' => $APIKEY,
    'arr_iata' => 'BUD'
  ]);
  
  $ch = curl_init(sprintf('%s?%s', 'http://api.aviationstack.com/v1/flights', $queryString));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  $json = curl_exec($ch);
  curl_close($ch);
  
  $api_result = json_decode($json, true);
  foreach ($api_result['data'] as $flight) {
          echo sprintf("A %s (%s) repülő a levegőben, %s (%s)-ból/ből a %s (%s) repülőtérre.<br>",
              $flight['airline']['name'],
              $flight['flight']['iata'],
              $flight['departure']['airport'],
              $flight['departure']['iata'],
              $flight['arrival']['airport'],
              $flight['arrival']['iata']
              ), PHP_EOL;
  }
?>
    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search");

        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }
        searchBtn.onclick = function(){
            sidebar.classList.toggle("active");
        }
    </script>
</body>
</html>