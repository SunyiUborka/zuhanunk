<head>
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<nav>
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bx-radar icon' ></i>
                    <div class="logo_name">BRUH</div>  
                <i class='bx bx-menu-alt-left' id="btn"></i>
            </div>
            <ul class="nav_list">
                <li>
                    <a href="index.php">
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
                    <a href="airports.php">
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
                    <a href="info.php">
                    <i class='bx bx-info-circle' ></i>
                        <span class="links_name">Információ</span>
                    </a>
                    <span class="tooltip">Információ</span>
                </li>
            </ul>
        </div>
    </nav>
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