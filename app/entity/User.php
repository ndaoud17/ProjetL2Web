<?php

namespace app\entity;

class User
{
    public int $id;
    public String $nom;
    public String $prenom;
    public String $civilite;
    public String $email;
    public String $mdp;

    public function __construct(array $data){
        $this->hydrate($data);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
            {
                $this->$method($value);

            }
        }
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param String $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return String
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param String $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return String
     */
    public function getCivilite(): string
    {
        return $this->civilite;
    }

    /**
     * @param String $civilite
     */
    public function setCivilite(string $civilite): void
    {
        $this->civilite = $civilite;
    }

    /**
     * @return String
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param String $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return String
     */
    public function getMdp(): string
    {
        return $this->mdp;
    }

    /**
     * @param String $mdp
     */
    public function setMdp(string $mdp): void
    {
        $this->mdp = $mdp;
    }


}