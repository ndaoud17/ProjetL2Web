
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
                <li class="active"><ion-icon name="images"></ion-icon><a href="index.php?action=oeuvre">Oeuvres</a></li>
                <li><ion-icon name="person-add"></ion-icon><a href="index.php?action=inscription">Inscription</a></li>
                <li><ion-icon name="log-in"></ion-icon><a href="index.php?action=connexion">Connexion</a></li>
            <?php endif;?>
        </ul>
    </nav>
    <header class="oeuvre">
        <div>
            <h1><strong>Top <?=$nb?></strong><br> des tableaux<br> les plus onéreux du monde</h1>
        </div>
    </header>
    <main>
        <?php if(isset($_SESSION['id_user']) && $_SESSION['id_user'] == 2):?>
            <?php foreach($oeuvres as $oeuvre) : ?>
                <section>
                    <div class="tableau">
                        <img src="<?=$oeuvre->url?>"/>
                        <section>
                            <h2><?=$oeuvre->nom?></h2>
                            <p><strong>Artiste :</strong> <?=$oeuvre->prenomArtiste?> <?= $oeuvre->nomArtiste?> </p>
                            <p><strong>Année Création :</strong> <?=$oeuvre->anneeCreation?></p>
                            <p><strong>Taille :</strong> <?=$oeuvre->hauteur?> x <?=$oeuvre->longueur?> cm</p>
                            <p><strong>Lieu :</strong> <?=$oeuvre->lieu?></p>
                            <p><strong>Prix :</strong> <?=$oeuvre->prix?> $</p>
                            <p><strong>Description :</strong> <?=$oeuvre->description?></p>
                        </section>
                    </div>
                    <footer class="boutons">
                        <p class="supprimer"><a href="index.php?action=suppression&oeuvre=<?=$oeuvre->id?>">Supprimer</a></p>
                        <p class="modifier"><a href="index.php?action=modification&oeuvre=<?=$oeuvre->id?>">Modifier</a></p>
                    </footer>
                </section>
            <?php endforeach; ?>
        <?php else:?>
            <?php foreach($oeuvres as $oeuvre) : ?>
                <section>
                    <div class="tableau">
                        <img src="<?=$oeuvre->url?>"/>
                        <section>
                            <h2><?=$oeuvre->nom?></h2>
                            <p><strong>Artiste :</strong> <?=$oeuvre->prenomArtiste?> <?= $oeuvre->nomArtiste?> </p>
                            <p><strong>Année Création :</strong> <?=$oeuvre->anneeCreation?></p>
                            <p><strong>Taille :</strong> <?=$oeuvre->hauteur?> x <?=$oeuvre->longueur?> cm</p>
                            <p><strong>Lieu :</strong> <?=$oeuvre->lieu?></p>
                            <p><strong>Prix :</strong> <?=$oeuvre->prix?> $</p>
                            <p><strong>Description :</strong> <?=$oeuvre->description?></p>
                        </section>
                    </div>
                </section>
            <?php endforeach; ?>
        <?php endif;?>
    </main>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
