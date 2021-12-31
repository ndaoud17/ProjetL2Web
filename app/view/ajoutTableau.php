
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
</head>
<body>
<nav>
    <ul class="menu">
        <?php if (isset($_SESSION['id_user']) && $_SESSION['id_user'] == 2) :?>
            <li><ion-icon name="home"></ion-icon><a href="index.php?action=accueil">Accueil</a></li>
            <li><ion-icon name="images"></ion-icon><a href="index.php?action=oeuvre">Oeuvres</a></li>
            <li  class="active"><ion-icon name="add-circle-outline"></ion-icon><a href="index.php?action=ajoutTableau">Ajout-Oeuvre</a></li>
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
            <li><ion-icon name="person-add"></ion-icon><a href="index.php?action=inscription">Inscription</a></li>
            <li><ion-icon name="log-in"></ion-icon><a href="index.php?action=connexion">Connexion</a></li>
        <?php endif;?>
    </ul>
</nav>
<main class="formulaire">
    <form id="formulaireAjout" method="post" action="index.php?action=ajoutTableau" enctype="multipart/form-data">
        <fieldset>
            <legend>Ajout d'un tableau</legend>
            <p>
                <input id="champsAjout" name="titre" placeholder="Titre Oeuvre" type="text" required />
            </p>
            <p>
                <input id="champsAjout" name="type" type="text" placeholder="Type Tableau" required />
            </p>
            <p>
                <input type="number" id="champsAjout" name="anneeCreation" min="1000" max="2021" placeholder="Année Création" required/>
            </p>
            <p>
                <input type="text" id="champsAjout" name="nomArtiste" placeholder="Nom Artiste" required/>
            </p>
            <p>
                <input type="text" id="champsAjout" name="prenomArtiste" placeholder="Prenom Artiste" required/>
            </p>
            <p>
                <input id="champsAjout" name="prix" type="text" placeholder="Prix" required />
            </p>
            <p>
                <input id="champsAjout" name="lieu" type="text" placeholder="Lieu"/>
            </p>
            <p>
                <input type="text" id="champsAjout" name="description" placeholder="Description" required/>
            </p>
            <p>
                <input type="number" id="champsAjout" name="longueur" placeholder="Longueur" min="0" required/>
            </p>
            <p>
                <input type="number" id="champsAjout" name="hauteur" placeholder="Hauteur" min="0" required/>
            </p>
            <p>
                <input id="champsAjout" name="url" type="url" pattern="https://.*" placeholder="Url Image" required />
            </p>
            <p class="submit">
                <input id="submit" type="submit" name="send" value="Envoyer"/>
                <input id="reset" type="reset"  value="Annuler"  />
            </p>
        </fieldset>
    </form>
</main>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>