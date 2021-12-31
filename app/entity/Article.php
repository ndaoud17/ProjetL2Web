<?php

namespace app\entity;

class Article
{
    public int $id;
    public String $nom;
    public float $prix;
    public String $couleur;
    public String $type;
    public String $url;

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
     * @return float
     */
    public function getPrix(): float
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @return String
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * @param String $couleur
     */
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * @return String
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param String $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return String
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param String $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }



}