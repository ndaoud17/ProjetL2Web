<?php

namespace app\entity;

class Oeuvre
{
    public int $id;
    public String $nom;
    public String $type;
    public String $nomArtiste;
    public String $prenomArtiste;
    public int $anneeCreation;
    public String $prix;
    public String $description;
    public String $url;
    public int $longueur;
    public int $largeur;
    public String $lieu;

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
    public function getNomArtiste(): string
    {
        return $this->nomArtiste;
    }

    /**
     * @param String $nomArtiste
     */
    public function setNomArtiste(string $nomArtiste): void
    {
        $this->nomArtiste = $nomArtiste;
    }

    /**
     * @return String
     */
    public function getPrenomArtiste(): string
    {
        return $this->prenomArtiste;
    }

    /**
     * @param String $prenomArtiste
     */
    public function setPrenomArtiste(string $prenomArtiste): void
    {
        $this->prenomArtiste = $prenomArtiste;
    }

    /**
     * @return int
     */
    public function getAnneeCreation(): int
    {
        return $this->anneeCreation;
    }

    /**
     * @param int $anneeCreation
     */
    public function setAnneeCreation(int $anneeCreation): void
    {
        $this->anneeCreation = $anneeCreation;
    }

    /**
     * @return String
     */
    public function getPrix(): string
    {
        return $this->prix;
    }

    /**
     * @param String $prix
     */
    public function setPrix(string $prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @return String
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param String $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
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

    /**
     * @return int
     */
    public function getLongueur(): int
    {
        return $this->longueur;
    }

    /**
     * @param int $longueur
     */
    public function setLongueur(int $longueur): void
    {
        $this->longueur = $longueur;
    }

    /**
     * @return int
     */
    public function getLargeur(): int
    {
        return $this->largeur;
    }

    /**
     * @param int $largeur
     */
    public function setLargeur(int $largeur): void
    {
        $this->largeur = $largeur;
    }

    /**
     * @return String
     */
    public function getLieu(): string
    {
        return $this->lieu;
    }

    /**
     * @param String $lieu
     */
    public function setLieu(string $lieu): void
    {
        $this->lieu = $lieu;
    }


}