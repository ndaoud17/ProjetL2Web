
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Document</title>
</head>
<body>
<nav>
    <ul class="menu">
        <?php if (isset($_SESSION['id_user']) && $_SESSION['id_user'] == 2) :?>
            <li><ion-icon name="home"></ion-icon><a href="index.php?action=accueil">Accueil</a></li>
            <li><ion-icon name="images"></ion-icon><a href="index.php?action=oeuvre">Oeuvres</a></li>
            <li><ion-icon name="add-circle-outline"></ion-icon><a href="index.php?action=ajoutTableau">Ajout-Oeuvre</a></li>
            <li><ion-icon name="log-out"></ion-icon><a href="index.php?action=deconnexion">Déconnexion</a></li>
        <?php elseif (isset($_SESSION['id_user']) && $_SESSION['id_user'] == 1) :?>
            <li><ion-icon name="home"></ion-icon><a href="index.php?action=accueil">Accueil</a></li>
            <li><ion-icon name="images"></ion-icon><a href="index.php?action=oeuvre">Oeuvres</a></li>
            <li><ion-icon name="appstore"></ion-icon><a href="index.php?action=boutique">Boutique</a></li>
            <li><ion-icon name="cart"></ion-icon><a href="index.php?action=panier">Panier</a></li>
            <li><ion-icon name="log-out"></ion-icon><a href="index.php?action=deconnexion">Déconnexion</a></li>
        <?php else:?>
            <li><ion-icon name="home"></ion-icon><a href="index.php?action=accueil">Accueil</a></li>
            <li><ion-icon name="images"></ion-icon><a href="index.php?action=oeuvre">Oeuvres</a></li>
            <li class="active"><ion-icon name="person-add"></ion-icon><a href="index.php?action=inscription">Inscription</a></li>
            <li><ion-icon name="log-in"></ion-icon><a href="index.php?action=connexion">Connexion</a></li>
        <?php endif;?>
    </ul>
</nav>
<main class="formulaire">
    <form enctype="multipart/form-data" method="post" action="index.php?action=inscription">
        <fieldset>
            <div>
                <legend>Inscription</legend>
                <p>
                    <input type="text" id="champsInscription" name="nom" placeholder=" Nom" autocomplete="off" required/>
                </p>
                <p>
                    <input type="text" id="champsInscription" name="prenom" placeholder=" Prenom" autocomplete="off" required/>
                </p>
                <p>
                    <select id="selectInscription" name="civilite" autocomplete="off">
                        <option>M.</option>
                        <option>Mme.</option>
                    </select>
                </p>
                <p>
                    <input type="email" id="champsInscription" name="email" placeholder=" E-mail" autocomplete="off" required/>
                </p>
                <p>
                    <input type="password" id="champsInscription" name="mdp" placeholder=" Mot de passe" required/>
                </p>
                <?php if (isset($_SESSION['erreur'])): ?>
                    <p class="erreur"><?= $_SESSION['erreur'] ?></p>
                    <?php unset($_SESSION['erreur']) ?>
                <?php endif; ?>
                <p class="submit">
                    <input id="submit" type="submit"  value="S'inscrire" name="send"  />
                    <input id="reset" type="reset"  value="Annuler"  />
                </p>
            </div>
        </fieldset>
    </form>
</main>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
