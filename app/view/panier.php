<?php
require 'fonctions.php';
?>
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
            <li><ion-icon name="images"></ion-icon><a href="index.php?action=oeuvre">Oeuvres</a></li>
            <li><ion-icon name="add-circle-outline"></ion-icon><a href="index.php?action=ajoutTableau">Ajout-Oeuvre</a></li>
            <li><ion-icon name="log-out"></ion-icon><a href="index.php?action=deconnexion">Déconnexion</a></li>
        <?php elseif (isset($_SESSION['id_user']) && $_SESSION['id_user'] == 1) :?>
            <li><ion-icon name="home"></ion-icon><a href="index.php?action=accueil">Accueil</a></li>
            <li><ion-icon name="images"></ion-icon><a href="index.php?action=oeuvre">Oeuvres</a></li>
            <li><ion-icon name="appstore"></ion-icon><a href="index.php?action=boutique">Boutique</a></li>
            <li  class="active"><ion-icon name="cart"></ion-icon><a href="index.php?action=panier">Panier</a></li>
            <li><ion-icon name="log-out"></ion-icon><a href="index.php?action=deconnexion">Déconnexion</a></li>
        <?php else:?>
            <li><ion-icon name="home"></ion-icon><a href="index.php?action=accueil">Accueil</a></li>
            <li><ion-icon name="images"></ion-icon><a href="index.php?action=oeuvre">Oeuvres</a></li>
            <li><ion-icon name="person-add"></ion-icon><a href="index.php?action=inscription">Inscription</a></li>
            <li><ion-icon name="log-in"></ion-icon><a href="index.php?action=connexion">Connexion</a></li>
        <?php endif;?>
    </ul>
</nav>
<main class="monPanier">
    <section>
        <header><h1>Mon panier</h1></header>
        <?php if(isset($_POST['send']) or !isset($_SESSION['articles'])):?>
            <div>
                <ion-icon name="basket"></ion-icon>
                <p>Votre panier est vide</p>
            </div>
        <?php elseif(isset($_POST['delete'])):?>
            <div>
                <ion-icon name="basket"></ion-icon>
                <p>Votre panier est vide</p>
            </div>
        <?php else:?>
            <table>
                <tr class="critères">
                    <th>Article :</th><td>Couleur</td><td>Quantité</td><td>Taille</td><td>Prix</td>
                </tr>
                <?php foreach ($_SESSION['articles'] as $cle):?>
                    <tr>
                        <th><?=$cle[5]?> - <?=$cle[0]?></th>
                        <td><?=$cle[4]?></td>
                        <td><?=$cle[2]?></td>
                        <td><?=$cle[1]?></td>
                        <td><?=$cle[3]?> €</td>
                    </tr>
                <?php endforeach;?>
            </table>
            <p id="total-achat">Total : <?= total($_SESSION['articles'])?> €</p>
            <form id="valider" action="index.php?action=panier" method="post" enctype="multipart/form-data">
                <p>
                    <input type="submit" id="valider" name="send" value="valider"/>
                    <input type="submit" id="annuler" name="delete" value="annuler"/>
                </p>
            </form>
        <?php endif;?>
    </section>
</main>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
