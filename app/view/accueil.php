
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" />
    <title>DAOUD Nassim</title>
</head>
<body>
    <?php if (isset($_SESSION['id_user']) && $_SESSION['id_user'] == 2) :?>
    <nav>
        <ul class="menu">
            <li class="active"><ion-icon name="home"></ion-icon><a href="index.php?action=accueil">Accueil</a></li>
            <li><ion-icon name="images"></ion-icon><a href="index.php?action=oeuvre">Oeuvres</a></li>
            <li><ion-icon name="add-circle-outline"></ion-icon><a href="index.php?action=ajoutTableau">Ajout-Oeuvre</a></li>
            <li><ion-icon name="log-out"></ion-icon><a href="index.php?action=deconnexion">Déconnexion</a></li>
        </ul>
    </nav>
    <header class="user">
        <h1>Bienvenue !</h1>
        <div>
            <ion-icon name="person"></ion-icon>
            <p><?=$_SESSION['civilite']?> <?=$_SESSION['nom']?> <?=$_SESSION['prenom']?></p>
        </div>
    </header>
    <?php elseif (isset($_SESSION['id_user']) && $_SESSION['id_user'] == 1) :?>
    <nav>
        <ul class="menu">
            <li class="active"><ion-icon name="home"></ion-icon><a href="index.php?action=accueil">Accueil</a></li>
            <li><ion-icon name="images"></ion-icon><a href="index.php?action=oeuvre">Oeuvres</a></li>
            <li><ion-icon name="appstore"></ion-icon><a href="index.php?action=boutique">Boutique</a></li>
            <li><ion-icon name="cart"></ion-icon><a href="index.php?action=panier">Panier</a></li>
            <li><ion-icon name="log-out"></ion-icon><a href="index.php?action=deconnexion">Déconnexion</a></li>
        </ul>
    </nav>
    <header class="user">
        <h1>Bienvenue !</h1>
        <div>
            <ion-icon name="person"></ion-icon>
            <p><?=$_SESSION['civilite']?> <?=$_SESSION['nom']?> <?=$_SESSION['prenom']?></p>
        </div>
    </header>
    <?php else:?>
    <div class="index">
        <nav class="accueil">
            <ul class="menu">
                <li class="active"><ion-icon name="home"></ion-icon><a href="index.php?action=accueil">Accueil</a></li>
                <li><ion-icon name="images"></ion-icon><a href="index.php?action=oeuvre">Oeuvres</a></li>
                <li><ion-icon name="person-add"></ion-icon><a href="index.php?action=inscription">Inscription</a></li>
                <li><ion-icon name="log-in"></ion-icon><a href="index.php?action=connexion">Connexion</a></li>
            </ul>
        </nav>
        <header class="titre">
            <div>
                <h1>World of <br><strong>Art</strong></h1>
            </div>
        </header>
    </div>
    <?php endif;?>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
