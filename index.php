<?php

session_start();

use app\controller\controllerOeuvre;
use app\controller\controllerUser;
use app\controller\controllerArticle;
use app\controller\controllerCommande;

function chargerClasse($classe)
{
    $classe=str_replace('\\','/',$classe);
    require $classe . '.php';
}

spl_autoload_register('chargerClasse'); //Autoload

$controllerOeuvre = new controllerOeuvre();
$controllerUser = new controllerUser();
$controllerArticle = new controllerArticle();
$controllerCommande = new controllerCommande();

if(empty($_GET)){
    require 'app/view/accueil.php';
}
else{
    if($_GET['action'] == 'oeuvre'){
        $controllerOeuvre->getAllOeuvres();
    }
    else if($_GET['action'] == 'inscription'){
        $controllerUser->inscription();
    }
    else if($_GET['action'] == 'connexion'){
        $controllerUser->connexion();
    }
    else if($_GET['action'] == 'accueil'){
        require 'app/view/accueil.php';
    }
    else if (isset($_SESSION['id_user']) && $_SESSION['id_user'] == 2){
        if($_GET['action'] == 'ajoutTableau'){
            $controllerOeuvre->enregistrerOeuvre();
        }
        if($_GET['action'] == 'modification' and !empty($_GET['oeuvre'])){
            $controllerOeuvre->modifierOeuvre();
        }
        if($_GET['action'] === 'suppression'){
            if(isset($_GET['oeuvre'])){
                if ( !empty($_GET['oeuvre']) )
                {
                    $id_oeuvre = $_GET['oeuvre'];
                    $condition = " WHERE id = $id_oeuvre";
                    $controllerOeuvre->supprimerOeuvre($condition);
                    header('Location: index.php?action=oeuvre');
                }
            }
            else{
                header('Location: index.php?action=oeuvre');
            }
        }
        if($_GET['action'] == 'deconnexion'){
            require 'app/view/deconnexion.php';
        }
    }
    else if (isset($_SESSION['id_user']) && $_SESSION['id_user'] == 1){
        if($_GET['action'] == 'deconnexion'){
            require 'app/view/deconnexion.php';
        }
        if($_GET['action'] == 'boutique'){
            $controllerArticle->getAllArticles();
            if(isset($_GET['article'])){
                $controllerArticle->enregistrerPanier();
            }
        }
        if($_GET['action'] == 'panier'){
            $controllerCommande->enregistrerCommande();
        }
    }
}
