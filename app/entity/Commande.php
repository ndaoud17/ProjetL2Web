<?php

namespace app\entity;

class Commande
{
    public int $id;
    public int $idUser;
    public float $prixTotal;

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
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->idUser;
    }

    /**
     * @param int $idUser
     */
    public function setIdUser(int $idUser): void
    {
        $this->idUser = $idUser;
    }

    /**
     * @return float
     */
    public function getPrixTotal(): float
    {
        return $this->prixTotal;
    }

    /**
     * @param float $prixTotal
     */
    public function setPrixTotal(float $prixTotal): void
    {
        $this->prixTotal = $prixTotal;
    }



}