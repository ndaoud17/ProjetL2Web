<?php

namespace app\controller;

use app\model\modelArticle;

class controllerArticle
{
    private $model;

    public function __construct()
    {
        $this->model = new modelArticle();
    }

    public function getAllArticles(){
        $articles = $this->model->findAllArticles();
        require 'app/view/boutique.php';
    }

    public function enregistrerPanier()
    {
        if(isset($_SESSION['articles'])){
            if(isset($_SESSION['id_user']) && $_SESSION['id_user'] == 1){
                $id_article = $_GET['article'];
                $rules = array("conditions" => "id = $id_article","fetch" => 'fetch');
                $article = $this->model->findArticle($rules);
                $couleur = $article->couleur;
                $type = $article->type;
                $prix = $article->prix;
                $designation = $article->nom;
                if(isset($_POST['valider'])) {
                    $qte = $_POST['quantite'];
                    $taille = $_POST['taille'];
                    $article = array($designation,$taille, $qte, $prix * $qte,$couleur,$type);
                    $_SESSION['articles'][] = $article;
                }
            }
        }
        else{
            $_SESSION['articles'] = array();
            if(isset($_SESSION['id_user']) && $_SESSION['id_user'] == 1){
                $id_article = $_GET['article'];
                $rules = array("conditions" => "id = $id_article","fetch" => 'fetch');
                $article = $this->model->findArticle($rules);
                $couleur = $article->couleur;
                $type = $article->type;
                $prix = $article->prix;
                $designation = $article->nom;
                if(isset($_POST['valider'])) {
                    $qte = $_POST['quantite'];
                    $taille = $_POST['taille'];
                    $article = array($designation,$taille, $qte, $prix * $qte,$couleur,$type);
                    $_SESSION['articles'][] = $article;
                }
            }

        }
    }


}
