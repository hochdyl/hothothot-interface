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

        <div class="main-generic">
            <section class="sensors card">
                <h2 class="title">La liste des capteurs</h2>

                <button class="btn">Ajouter un capteur</button>

                <table>
                    <tr>
                        <th>Nom du capteur</th>
                        <th>Options</th>
                    </tr>
                    <tr>
                        <td>Inférieur</td>
                        <td><a href="#">Modifier</a> <a href="#">Supprimer</a></td>
                    </tr>
                    <tr>
                        <td>Exterieur</td>
                        <td><a href="#">Modifier</a> <a href="#">Supprimer</a></td>
                    </tr>
                    <tr>
                        <td>Test</td>
                        <td><a href="#">Modifier</a> <a href="#">Supprimer</a></td>
                    </tr>
                    <tr>
                        <td>Nouveau capteur</td>
                        <td><a href="#">Modifier</a> <a href="#">Supprimer</a></td>
                    </tr>
                    <tr>
                        <td>Capteur additionnel</td>
                        <td><a href="#">Modifier</a> <a href="#">Supprimer</a></td>
                    </tr>
                </table>
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

    <script src="js/chart.js"></script>
    <script src="js/alerts.js"></script>
    <script src="js/animations.js"></script>
</body>
</html>