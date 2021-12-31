<?php

namespace app\controller;

use app\entity\User;
use app\model\modelUser;

class controllerUser
{
    private $model;

    public function __construct()
    {
        $this->model = new modelUser();
    }

    public function inscription()
    {
        include 'app/view/inscription.php';
        if(isset($_POST["send"])) if(!empty($_POST["email"]) && !empty($_POST["mdp"]) && !empty($_POST["civilite"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"])){
            $email=htmlspecialchars(addslashes($_POST["email"]));
            $mdp=password_hash(htmlspecialchars(addslashes($_POST["mdp"])),PASSWORD_DEFAULT);
            $civilite=htmlspecialchars(addslashes($_POST["civilite"]));
            $nom=strtoupper(htmlspecialchars(addslashes($_POST["nom"])));
            $prenom=strtoupper(htmlspecialchars(addslashes($_POST["prenom"])));
            $rules = array("conditions" => "email = '$email'","fetch" => 'fetchAll');
            $nb = $this->model->nbUser($rules);
            if($nb == 0) {
                $user = new User(array('email' => $email, 'mdp' => $mdp,'nom' => $nom, 'prenom' => $prenom, 'civilite' => $civilite));
                $this->model->saveUser($user);

            }
            else{
                header('Location: index.php?action=inscription');
                $_SESSION['erreur'] = "L' E-mail suivant est déjà utilisé ";
            }
        }
    }

    public function connexion(){
        include 'app/view/connexion.php';
        if(isset($_POST["send"])){
            if(!empty($_POST["email"]) && !empty($_POST["mdp"]) ){
                $email=htmlspecialchars($_POST["email"]);
                $mdp=htmlspecialchars($_POST["mdp"]);
                $rules = array("conditions" => "email = '$email'","fetch" => 'fetch');
                $user = $this->model->findUser($rules);
                $mdpUtilisateur = $user->mdp;
                if(password_verify($mdp,$mdpUtilisateur) == 1) {
                    $_SESSION['email'] = $email;
                    $_SESSION['mdp'] = $mdp;
                    $_SESSION['nom'] = $user->nom;
                    $_SESSION['prenom'] = $user->prenom;
                    $_SESSION['id_user'] = $user->role;
                    $_SESSION['civilite'] = $user->civilite;
                    $_SESSION['id_client'] = $user->id;
                    header('Location: index.php?action=accueil');
                }
                else{
                    header('Location: index.php?action=connexion');
                    $_SESSION['erreurConnexion'] = "L'identifiant ou le mot de passe est incorrect";
                }
            }
        }
    }
}