
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
            <li class="active"><ion-icon name="images"></ion-icon><a href="index.php?action=oeuvre">Oeuvres</a></li>
            <li><ion-icon name="add-circle-outline"></ion-icon><a href="index.php?action=ajoutTableau">Ajout-Oeuvre</a></li>
            <li><ion-icon name="log-out"></ion-icon><a href="index.php?action=deconnexion">Déconnexion</a></li>
        <?php elseif (isset($_SESSION['id_user']) && $_SESSION['id_user'] == 1) :?>
            <li><ion-icon name="home"></ion-icon><a href="index.php?action=accueil">Accueil</a></li>
            <li class="active"><ion-icon name="images"></ion-icon><a href="index.php?action=oeuvre">Oeuvres</a></li>
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
    <form id="formulaireAjout" method="post" action="index.php?action=modification&oeuvre=<?=$_GET['oeuvre']?>" enctype="multipart/form-data">
        <fieldset>
            <legend>Modifier Tableau N°<?=$_GET['oeuvre']?></legend>
            <p>
                <label for="titre">Nom Oeuvre : </label>
                <input id="champsAjout" name="titre" placeholder="Titre Oeuvre" type="text" value="<?=$oeuvre->nom?>" required />
            </p>
            <p>
                <label for="type">Type : </label>
                <input id="champsAjout" name="type" type="text" placeholder="Type Tableau" value="<?=$oeuvre->type?>" required />
            </p>
            <p>
                <label for="annee_creation">Année Création : </label>
                <input type="number" id="champsAjout" name="annee_creation" min="1000" max="2021" placeholder="Année Création" value="<?=$oeuvre->anneeCreation?>" required/>
            </p>
            <p>
                <label for="nomArtiste">Nom Artiste : </label>
                <input type="text" id="champsAjout" name="nomArtiste" placeholder="Nom Artiste" value="<?=$oeuvre->nomArtiste?>" required/>
            </p>
            <p>
                <label for="prenomArtiste">Prenom Artiste : </label>
                <input type="text" id="champsAjout" name="prenomArtiste" placeholder="Prenom Artiste" value="<?=$oeuvre->prenomArtiste?>" required/>
            </p>
            <p>
                <label for="prix">Prix : </label>
                <input id="champsAjout" name="prix" type="text" placeholder="Prix" value="<?=$oeuvre->prix?>" required />
            </p>
            <p>
                <label for="lieu">Lieu : </label>
                <input id="champsAjout" name="lieu" type="text" placeholder="Lieu" value="<?=$oeuvre->lieu?>"/>
            </p>
            <p>
                <label for="description">Description : </label>
                <input type="text" id="champsAjout" name="description" placeholder="Description" value="<?=$oeuvre->description?>" required/>
            </p>
            <p>
                <label for="longueur">Longueur : </label>
                <input type="number" id="champsAjout" name="longueur" placeholder="Longueur" min="0" value="<?=$oeuvre->longueur?>" required/>
            </p>
            <p>
                <label for="hauteur">Hauteur : </label>
                <input type="number" id="champsAjout" name="hauteur" placeholder="Hauteur" min="0" value="<?=$oeuvre->hauteur?>" required/>
            </p>
            <p>
                <label for="url">Url Image : </label>
                <input id="champsAjout" name="url" type="url" pattern="https://.*" placeholder="Url Image" value="<?=$oeuvre->url?>" required />
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
