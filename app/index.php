<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>HotHotHot</title>
    <link href="style/sass/style.css" rel="stylesheet">
    <script src="../libraries/Chart.js-2.9.4/dist/Chart.min.js"></script>
</head>
<body>

    <main>
        <nav class="navbar-left">
            <header class="title">
                <a href="index.php"><h2>HOTHOTHOT!</h2></a>
            </header>
                <ul>
                    <li class="nav-sensors"><a href="sensors.php">Capteurs</a></li>
                    <li class="nav-account"><a href="#">Compte</a></li>
                    <li class="nav-logout"><a href="#">Deconnexion</a></li>
                </ul>
            <footer>
                <p>Pre-release Mockup</p>
            </footer>
        </nav>

        <nav class="navbar-top">
            <a href="index.php"><h2>HOTHOTHOT!</h2></a>
            <ul>
                <li><a href="sensors.php">Capteurs</a></li>
                <li><a href="#">Compte</a></li>
                <li><a href="#">Deconnexion</a></li>
            </ul>
        </nav>

        <h1 class="title mobile-title"><a href="index.php">HOTHOTHOT!</a></h1>

        <div class="main-index">
            <header class="sensors no-highlight">
                <ul>
                    <li class="card">Intérieur | 15°</li>
                    <li class="card">Exterieur | 12°</li>
                    <li class="card">Test | -10°</li>
                    <li class="card">Nouveau capteur | 4°</li>
                    <li class="card">Capteur additionnel | 34°</li>
                </ul>
            </header>

            <section class="graphic card">
                <h2 class="title">Le nom du capteur</h2>
                <ul>
                    <li>
                        <label for="capteurs">Le capteur</label>
                        <select id="capteurs">
                            <option value="Capteur 1">Capteur 1</option>
                            <option value="Capteur 2">Capteur 2</option>
                            <option value="Capteur 3">Capteur 3</option>
                            <option value="Capteur 4">Capteur 4</option>
                        </select>
                    </li>
                    <li>
                        <label for="date">La date</label>
                        <input type="date" id="date">
                    </li>
                    <li>
                        <canvas id="chart"></canvas>
                    </li>
                </ul>
            </section>

            <section class="alerts card">
                <header>
                    <h2 class="title">Alertes (5)</h2>
                </header>
                <ul>
                    <li class="alert-red">
                        <a data-alert="1" href="#">
                            <h2>Intérieur</h2>
                            <h3>Le 29/09/2020 à 13:45</h3>
                        </a>
                    </li>
                    <li class="alert-yellow">
                        <a data-alert="2" href="#">
                            <h2>Exterieur</h2>
                            <h3>Le 29/09/2020 à 11:35</h3>
                        </a>
                    </li>
                    <li class="alert-cyan">
                        <a data-alert="3" href="#">
                            <h2>Test</h2>
                            <h3>Le 29/09/2020 à 08:21</h3>
                        </a>
                    </li>
                    <li class="alert-blue">
                        <a data-alert="4" href="#">
                            <h2>Nouveau capteur</h2>
                            <h3>Le 29/09/2020 à 06:00</h3>
                        </a>
                    </li>
                    <li class="alert-grey">
                        <a data-alert="5" href="#">
                            <h2>Capteur additionnel</h2>
                            <h3>Le 29/09/2020 à 05:50</h3>
                        </a>
                    </li>
                </ul>
            </section>

            <footer>
                <p>Pre-release Mockup</p>
            </footer>
        </div>

        <nav class="navbar-mobile">
            <ul>
                <li><a href="sensors.php"><img alt="List icon" src="img/view_list-black-18dp.svg"></a></li>
                <li><a href="#"><img alt="Account icon" src="img/person-black-18dp.svg"></a></li>
                <li><a href="#"><img alt="Logout icon" src="img/exit_to_app-black-18dp.svg"></a></li>
            </ul>
        </nav>
    </main>

    <section class="alerts-popup">
        <header>
            <h2 class="title"><span id="alertTemperature">0</span>° | <span id="alertSensor">Sensor</span></h2>
            <h3><span id="alertDate">01/01/2020</span> à <span id="alertTime">00:00</span></h3>
        </header>
        <h2 class="title" id="alertTitle">Title</h2>
    </section>

    <script src="js/chart.js"></script>
    <script src="js/alerts.js"></script>
    <script src="js/animations.js"></script>
</body>
</html>