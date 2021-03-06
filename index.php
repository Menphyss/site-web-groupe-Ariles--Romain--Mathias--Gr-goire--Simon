<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librairie De Fou</title>
    <link rel="icon" type="image/png" href="./img/logo.png" />
    <link rel="stylesheet" href="css/mainStyle.css">
    <link rel="stylesheet" href="css/svgStyle.css">
    <link rel="stylesheet" href="css/scroll.css">
    <link rel="stylesheet" href="css/groupe.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta property="og:title" content="Le site de fou" />
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Viens voir">
    <meta property="og:image:width" content="767">
    <meta property="og:image:height" content="767">
</head>

<body>
    <section id="Landing">
        <div id ="headerText" class="paddingLeft">
            <a id="salut" href="Librairies.php">Librairie</a>
            <a id="salut"href="Livres.php">Livres</a>
            <a id="salut" href="Contact.php">Contact</a> 
            <a href="Connection.php" class="inscription1">Inscription</a>
            <a href="Signup.php" class="inscription">Connectez vous</a>
        </div>

        <canvas id="DotAnimation"></canvas>
        <div id="LandingText" class="paddingLeft">
            <h1>Bienvenue,<br>ici tu retrouveras toutes sortes de divertissements.</h1>
            <h2>Ce site contient toutes les librairies dans ton secteur, tu pourras donc les consulter et réserver tes livres en avant première !</h2>
        </div>

        <svg preserveAspectRatio="none" id="BottomWave" viewBox="0 0 1433 307" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M-1 101L59 115C119 130 239 159 359 166C479 173 599 159 719 115C839 72 959 0 1079 0C1199 0 1319 72 1379 108L1439 144V317H1379C1319 317 1199 317 1079 317C959 317 839 317 719 317C599 317 479 317 359 317C239 317 119 317 59 317H-1V101Z"
                fill="#2EC4B6" />
        </svg>
    </section>
    <input id="searchbar" type="text" name="search" placeholder="Search for a book...">
<!-- Librairie dans ton secteur -->

    <section id="Librairie">
        <h1 class="paddingLeft yo">Librairie proche</h1>
        <div id="Librairie-wrapper">
            <figure id="Parages">
                <img src="image\Librairie\parages.jpg" alt="Librairie Les Parages">
                <figcaption>Librairie Les Parages</figcaption>
            </figure>
            <figure id="Calypso">
                <img src="image\Librairie\calypso.jpg" alt="Librairie CXalypso">
                <figcaption>Librairie Calypso</figcaption>
            </figure>
            <figure id="Musardine">
                <img src="image\Librairie\musardine.jpg" alt="La Musardine">
                <figcaption>La Musardine</figcaption>
        </div>


<!-- carrousel de livre -->
    </section>
    <section id="Groupe">
        <h1 class="paddingLeft yo1">Livre de la semaine</h1>
        <div id="photo-wrapper">
            <figure id="Traumatisme">
                <img src="image\Livre\livre 1.jpg">
                <figcaption>Comment traumatiser votre enfant</figcaption>
            </figure>
            <figure id="JamesBond">
                <img src="image\Livre\livre 2.jpg">
                <figcaption>James Bond</figcaption>
            </figure>
            <figure id="Harrypotter">
                <img src="image\Livre\livre 3.jpg">
                <figcaption>HarryPotter</figcaption>
            </figure>
            <figure id="PercyJackson">
                <img src="image\Livre\Livre 4.jpg" >
                <figcaption>Percy Jackson</figcaption>
            </figure>
            <figure id="Nico">
                <img src="image\Livre\Livre 5.jpg">
                <figcaption>Le temps des tempêtes</figcaption>
            </figure>
            <figure id="Schiappa">
                <img src="image\Livre\Livre 6.jpeg">
                <figcaption>Entre toutes les femmes</figcaption>
            </figure>
        </div>
        <a onclick="Next()">Suivant</a>
    </section>

    <footer>
        <svg id="footer-wave" preserveAspectRatio="none" viewBox="0 0 1433 293" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0 251.225L59.7083 195.525C119.417 139.825 238.833 28.4251 358.25 28.4251C477.667 28.4251 607.035 89.6693 726.451 131.444C845.868 173.219 1013.55 185.404 1132.97 143.629C1252.38 101.854 1313.58 56.2751 1373.29 28.4251L1433 0.575073V293H1373.29C1313.58 293 1194.17 293 1074.75 293C955.333 293 835.917 293 716.5 293C597.083 293 477.667 293 358.25 293C238.833 293 119.417 293 59.7083 293H0V251.225Z"
                fill="#CBF3F0" />
        </svg>
    </footer>
    <a href="#Landing">
        <div id="UP">
            <svg preserveAspectRatio="none" viewBox="0 0 42 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 33L18.9996 17.7898C20.1385 16.7708 21.8615 16.7708 23.0004 17.7898L40 33" stroke="#362C28"
                    stroke-width="3" stroke-linecap="round" />
                <path d="M2 18L18.9996 2.78982C20.1385 1.77078 21.8615 1.77078 23.0004 2.78982L40 18" stroke="#362C28"
                    stroke-width="3" stroke-linecap="round" />
            </svg>
        </div>
    </a>
    <svg id="Logo" viewBox="0 0 157 240" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M1.02705 218.556C1.02705 218.556 9.24012 104.858 9.88264 95.3323C18.0957 96.31 64.4408 98.936 83.8281 95.3323C90.7282 100.584 106.512 103.21 113.747 92.0359C115.395 106.507 119.334 209.03 123.944 216.601C122.631 224.479 120.005 228.417 116.373 229.73C112.741 231.043 71.6762 239.592 68.715 239.284C65.7538 238.977 36.198 237.971 29.6052 235.988C23.0124 234.005 0.105172 231.323 1.02705 218.556Z"
            fill="#F39200" stroke="#7D4E24" stroke-miterlimit="10" />
        <path
            d="M14.0731 101.534C14.0731 101.534 7.81549 211.963 5.69238 216.573C6.02761 220.847 4.71464 223.808 14.0731 227.747C23.4315 231.686 53.8254 237.273 59.7477 236.295C65.6701 235.318 112.323 231.015 117.267 226.099C122.212 221.182 117.267 194.532 117.267 194.532L110.032 103.825"
            stroke="#CBBBA0" stroke-miterlimit="10" />
        <path
            d="M42.6512 124.022C45.2431 124.022 47.3443 121.921 47.3443 119.329C47.3443 116.737 45.2431 114.636 42.6512 114.636C40.0592 114.636 37.958 116.737 37.958 119.329C37.958 121.921 40.0592 124.022 42.6512 124.022Z"
            stroke="#634E42" stroke-miterlimit="10" />
        <path
            d="M44.5232 142.488C46.0814 142.488 47.3447 141.224 47.3447 139.666C47.3447 138.108 46.0814 136.845 44.5232 136.845C42.9649 136.845 41.7017 138.108 41.7017 139.666C41.7017 141.224 42.9649 142.488 44.5232 142.488Z"
            stroke="#634E42" stroke-miterlimit="10" />
        <path
            d="M55.8647 165.646C56.8829 165.646 57.7083 164.821 57.7083 163.802C57.7083 162.784 56.8829 161.959 55.8647 161.959C54.8464 161.959 54.021 162.784 54.021 163.802C54.021 164.821 54.8464 165.646 55.8647 165.646Z"
            fill="#7D4E24" stroke="#634E42" stroke-miterlimit="10" />
        <path
            d="M120.005 186.039C120.005 186.039 149.588 172.881 152.885 146.594C155.416 134.721 156.412 122.572 155.846 110.445C155.339 103.068 154.463 95.7212 153.22 88.432C153.22 88.432 147.633 70.4974 132.827 70.9164H117.295"
            fill="#CBBBA0" />
        <path
            d="M120.005 186.039C120.005 186.039 149.588 172.881 152.885 146.594C155.416 134.721 156.412 122.572 155.846 110.445C155.339 103.068 154.463 95.7212 153.22 88.432C153.22 88.432 147.633 70.4974 132.827 70.9164H117.295"
            stroke="#7D4E24" stroke-miterlimit="10" />
        <path
            d="M118.161 157.405C118.161 157.405 130.844 149.388 133.693 143.214C136.733 135.479 138.315 127.249 138.359 118.938C138.359 115.362 137.381 103.294 133.805 100.333C132.182 98.8911 130.28 97.7977 128.218 97.1203C126.737 97.1203 115.396 97.1203 115.396 97.1203"
            fill="white" />
        <path
            d="M118.161 157.405C118.161 157.405 130.844 149.388 133.693 143.214C136.733 135.479 138.315 127.249 138.359 118.938C138.359 115.362 137.381 103.294 133.805 100.333C132.182 98.8911 130.28 97.7977 128.218 97.1203C126.737 97.1203 115.396 97.1203 115.396 97.1203"
            stroke="#7D4E24" stroke-miterlimit="10" />
        <path
            d="M74.2184 73.5146C74.2184 73.5146 72.1511 92.9019 78.5484 99.4668C81.3419 103.909 85.1412 111.144 98.1033 110.976C102.349 110.809 111.065 108.49 114.362 100.445C116.676 92.0581 117.396 83.312 116.485 74.66C116.178 71.3636 114.194 58.2059 114.194 58.2059C114.194 58.2059 124.055 42.7855 109.417 34.4048C109.417 30.6056 112.714 10.2405 88.242 12.3636C85.9234 10.2405 67.5138 -12.108 43.5451 12.3636C40.5839 12.6709 24.9679 11.0227 13.9613 26.1638C12.4807 28.9574 5.24539 44.713 7.36849 59.6865C8.54178 64.9384 11.6426 76.4479 20.0233 80.6941C23.3197 82.1747 36.4774 90.248 51.5905 85.471C55.0545 84.186 69.6928 79.7442 74.2184 73.5146Z"
            fill="white" stroke="#7D4E24" stroke-miterlimit="10" />
        <path
            d="M116.736 95.6675C117.2 93.5371 117.545 91.3828 117.77 89.2144C117.77 91.0022 118.049 95.6675 118.049 95.6675H116.736Z"
            fill="#CBBBA0" />
        <path d="M11.8379 44.0146C11.8379 44.0146 18.0117 16.973 42.567 16.7216" stroke="#936037"
            stroke-miterlimit="10" />
        <path
            d="M62.4575 9.15124C66.3909 8.30922 70.4871 8.67787 74.207 10.2087C77.9269 11.7395 81.096 14.3608 83.2975 17.7275"
            stroke="#936037" stroke-miterlimit="10" />
        <path
            d="M88.2422 22.3925C88.2422 22.3925 105.255 17.839 101.791 37.9247C102.545 40.0198 112.518 42.115 112.015 45.9142C111.513 49.7135 107.35 54.2949 109.697 58.0104"
            stroke="#936037" stroke-miterlimit="10" />
        <path d="M82.655 98.489C82.655 98.489 96.6228 115.25 110.116 97.9861" stroke="#936037" stroke-miterlimit="10" />
        <path d="M118.748 75.3583C118.748 75.3583 158.528 63.6533 151.963 126.508" stroke="#936037" stroke-width="0.5"
            stroke-miterlimit="10" />
        <path d="M119.446 79.3812C119.446 79.3812 140.174 76.0848 143.946 90.2202" stroke="#936037" stroke-width="0.5"
            stroke-miterlimit="10" />
        <path d="M119.446 182.91C119.446 182.91 133.637 175.619 136.626 170.703" stroke="#936037" stroke-width="0.5"
            stroke-miterlimit="10" />
        <path d="M91.5662 110.334L96.399 147.74" stroke="#7D4E24" stroke-miterlimit="10" />
        <path d="M103.243 109.999L112.043 173.217" stroke="#7D4E24" stroke-miterlimit="10" />
        <path
            d="M9.93848 95.3323C9.93848 95.3323 12.4527 74.4924 11.8102 72.2296C13.8059 75.9714 16.9084 79.0056 20.6937 80.9176C25.5179 83.71 30.809 85.603 36.3097 86.5047C42.6231 86.9237 44.9418 87.5662 50.92 85.6107C56.4173 83.9532 61.7707 81.8511 66.9271 79.3252C69.7282 77.9911 72.2208 76.0883 74.2462 73.7381C74.0227 76.9228 73.1567 90.0525 76.1738 95.8352C76.1738 96.5615 76.1738 96.5615 76.1738 96.5615L67.7931 97.1202L49.188 97.3716L33.1529 96.9805L9.93848 95.3323Z"
            fill="#F39200" stroke="#7D4E24" stroke-miterlimit="10" />
    </svg>
    <svg preserveAspectRatio="none" id="MiddleWave" viewBox="0 0 1433 867" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="" fill="#CBF3F0">
            <animate attributeName="d" dur="100s" repeatCount="indefinite" keyTimes="0;0.25;0.5;0.75;1" calcmod="spline"
                keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="0s"
                values="M815.905 200.017C628.733 152.433 585.345 62.0073 587.048 2.33256V0H0V866.5H1433V505C1316.53 498.78 1179.62 465.93 1065.2 414.613C880.972 331.997 1049.87 259.498 815.905 200.017Z;M946 109C758.828 61.4157 585.345 62.0073 587.048 2.33256V0H0V866.5H1433V505C1316.53 498.78 1332.93 508.816 1218.5 457.5C1034.28 374.883 1179.97 168.48 946 109Z;M871 165.5C683.828 117.916 637.5 58.5 587.048 2.33256V0H0V866.5H1433V505C1316.53 498.78 1422.43 245.316 1308 194C1123.78 111.383 1104.97 224.98 871 165.5Z;M946 109C758.828 61.4157 585.345 62.0073 587.048 2.33256V0H0V866.5H1433V505C1316.53 498.78 1332.93 508.816 1218.5 457.5C1034.28 374.883 1179.97 168.48 946 109Z;M815.905 200.017C628.733 152.433 585.345 62.0073 587.048 2.33256V0H0V866.5H1433V505C1316.53 498.78 1179.62 465.93 1065.2 414.613C880.972 331.997 1049.87 259.498 815.905 200.017Z">
            </animate>
        </path>/>
    </svg>
    <script src="js/DotAnimation.js"></script>

    <script src="js/GroupeSlide.js"></script>
    <script src="js/UpButton.js"></script>

</body>


</html>
