
<!doctype html>
<html lang="en">
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
            <li><ion-icon name="images"></ion-icon><a href="index.php?action=oeuvre">Oeuvres</a></li>
            <li class="active"><ion-icon name="appstore"></ion-icon><a href="index.php?action=boutique">Boutique</a></li>
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
<header class="boutique">
    <h1>Boutique</h1>
</header>
<main class="articles">
    <?php foreach($articles as $article) : ?>
        <section>
            <div class="article">
                <img src="<?=$article->url?>"/>
                <section>
                    <h2><?=$article->nom?></h2>
                    <p><?=$article->type?> - <?= $article->couleur?> </p>
                    <p><strong><?=$article->prix?> €</strong></p>
                </section>
                <form id="formulaireAchat" method="post" action="index.php?action=boutique&article=<?=$article->id?>" enctype="multipart/form-data">
                    <div class="line1">
                        <p>
                            <label for="taille">Taille : </label>
                            <select id="champArticle" name="taille" autocomplete="off">
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                                <option>XXL</option>
                            </select>
                        </p>
                        <p>
                            <label for="quantite">Quantité : </label>
                            <input id="champQuantite" name="quantite" type="number" min="1" value="1" required />
                        </p>
                    </div>
                    <div class="line2">
                        <p class="panier">
                            <input id="panier" type="submit"  value="Panier" name="valider"/>
                        </p>
                    </div>

                </form>
            </div>
        </section>
    <?php endforeach; ?>
</main>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
