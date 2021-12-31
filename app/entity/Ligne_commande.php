<?php

namespace app\entity;

class Ligne_commande
{
    public int $idCommande;
    public int $idArticle;
    public float $qteArticle;
    public String $taille;

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
    public function getIdCommande(): int
    {
        return $this->idCommande;
    }

    /**
     * @param int $idCommande
     */
    public function setIdCommande(int $idCommande): void
    {
        $this->idCommande = $idCommande;
    }

    /**
     * @return int
     */
    public function getIdArticle(): int
    {
        return $this->idArticle;
    }

    /**
     * @param int $idArticle
     */
    public function setIdArticle(int $idArticle): void
    {
        $this->idArticle = $idArticle;
    }

    /**
     * @return float
     */
    public function getQteArticle(): float
    {
        return $this->qteArticle;
    }

    /**
     * @param float $qteArticle
     */
    public function setQteArticle(float $qteArticle): void
    {
        $this->qteArticle = $qteArticle;
    }

    /**
     * @return String
     */
    public function getTaille(): string
    {
        return $this->taille;
    }

    /**
     * @param String $taille
     */
    public function setTaille(string $taille): void
    {
        $this->taille = $taille;
    }


}