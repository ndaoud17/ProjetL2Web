<?php

namespace app\controller;


use app\entity\Commande;
use app\entity\Ligne_commande;
use app\model\modelArticle;
use app\model\modelCommande;
use app\model\modelLigne_commande;

class controllerCommande
{
    private $model1;
    private $model2;
    private $model3;

    public function __construct()
    {
        $this->model1 = new modelCommande();
        $this->model2 = new modelLigne_commande();
        $this->model3 = new modelArticle();
    }

    public function enregistrerCommande()
    {
        require 'app/view/panier.php';
        if(isset($_POST['send'])){
            if(sizeof($_SESSION['articles'])!=0){
                $id_client = $_SESSION['id_client'];
                $total = total($_SESSION['articles']);
                $commande = new Commande(array('idUser' => $id_client,'prixTotal' => $total));
                $this->model1->saveCommande($commande);
                $id_commande = $this->model1->lastInsertId();
                foreach ($_SESSION['articles'] as $cle) {
                    $titre = $cle[0];
                    $taille2 = $cle[1];
                    $quantite = $cle[2];
                    $rules2 = array("conditions" => "nom = '$titre'","fetch" => 'fetch');
                    $articleId = $this->model3->findArticle($rules2);
                    $id = (int) $articleId->id;
                    $ligneCommande = new Ligne_commande(array('idCommande' => $id_commande, 'idArticle' => $id, 'qteArticle' => $quantite, 'taille' => $taille2));
                    $this->model2->saveLigne_commande($ligneCommande);
                    unset($_SESSION['articles']);
                }
            }
            else{
                header('Location: index.php?action=boutique');
            }
        }
        if(isset($_POST['delete'])){
            unset($_SESSION['articles']);
        }
    }
}