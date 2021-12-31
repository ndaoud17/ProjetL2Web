<?php

namespace app\controller;

use app\entity\Oeuvre;
use app\model\modelOeuvre;

class controllerOeuvre
{
    private $model;

    public function __construct()
    {
        $this->model = new modelOeuvre();
    }

    public function getAllOeuvres(){
        $oeuvres = $this->model->findAll();
        $nb = $this->model->nbOeuvres();
        require 'app/view/oeuvre.php';
    }

    public function modifierOeuvre(){
        if(isset($_GET['oeuvre'])){
            if ( !empty($_GET['oeuvre']) )
            {
                $id_oeuvre = $_GET['oeuvre'];
                $rules = array("conditions" => "id = $id_oeuvre","fetch" => 'fetch');
                $oeuvre = $this->model->findOeuvre($rules);
                $condition = " WHERE id = $id_oeuvre";
                if (isset($_POST['send'])){
                    $titre = mb_strtoupper(htmlspecialchars(addslashes($_POST['titre'])));
                    $type = htmlspecialchars(addslashes($_POST['type']));
                    $nomArtiste = htmlspecialchars(addslashes($_POST['nomArtiste']));
                    $prenomArtiste = htmlspecialchars(addslashes($_POST['prenomArtiste']));
                    $annee = htmlspecialchars(addslashes($_POST['annee_creation']));
                    $prix = htmlspecialchars(addslashes($_POST['prix']));
                    $lieu = htmlspecialchars(addslashes($_POST['lieu']));
                    $description = htmlspecialchars(addslashes($_POST['description']));
                    $longueur = htmlspecialchars(addslashes($_POST['longueur']));
                    $hauteur = htmlspecialchars(addslashes($_POST['hauteur']));
                    $url = htmlspecialchars(addslashes($_POST['url']));
                    $oeuvreModif = new Oeuvre(array('nom' => $titre, 'type' => $type, 'nomArtiste' => $nomArtiste, 'prenomArtiste' => $prenomArtiste, 'annee_creation' => $annee, 'prix' => $prix, 'description' => $description, 'longueur' =>$longueur, 'hauteur' => $hauteur, 'url' => $url, 'lieu' => $lieu));
                    $this->model->updateOeuvre($oeuvreModif,$condition);
                    header('Location: index.php?action=oeuvre');
                }
            }
        }
        else{
            header('Location: index.php?action=oeuvres');
        }
        include 'app/view/modification.php';

    }

    public function enregistrerOeuvre(){
        require 'app/view/ajoutTableau.php';
        if(isset($_POST["send"])){
            $titre = mb_strtoupper(htmlspecialchars($_POST['titre']));
            $type = htmlspecialchars($_POST['type']);
            $nomArtiste = htmlspecialchars($_POST['nomArtiste']);
            $prenomArtiste = htmlspecialchars($_POST['prenomArtiste']);
            $annee = htmlspecialchars($_POST['anneeCreation']);
            $prix = htmlspecialchars($_POST['prix']);
            $description = htmlspecialchars($_POST['description']);
            $longueur = htmlspecialchars($_POST['longueur']);
            $hauteur = htmlspecialchars($_POST['hauteur']);
            $url = htmlspecialchars($_POST['url']);

            if(!empty($_POST['lieu'])){
                $oeuvres = new Oeuvre(array('nom' => $titre, 'type' => $type, 'nomArtiste' => $nomArtiste, 'prenomArtiste' => $prenomArtiste, 'anneeCreation' => $annee, 'prix' => $prix, 'description' => $description, 'longueur' =>$longueur, 'hauteur' => $hauteur, 'url' => $url));;
                $this->model->saveOeuvre($oeuvres);
                header('Location: index.php?action=oeuvre');
            }
            else {
                $lieu = htmlspecialchars($_POST['lieu']);
                $oeuvres = new Oeuvre(array('nom' => $titre, 'type' => $type, 'nomArtiste' => $nomArtiste, 'prenomArtiste' => $prenomArtiste, 'anneeCreation' => $annee, 'prix' => $prix, 'description' => $description, 'longueur' => $longueur, 'hauteur' => $hauteur, 'url' => $url, 'lieu' => $lieu));
                $this->model->saveOeuvre($oeuvres);
                header('Location: index.php?action=oeuvre');
            }
        }
    }

    public function supprimerOeuvre($condition){
        $this->model->deleteOeuvre($condition);
    }


}