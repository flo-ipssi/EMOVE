<?php

class  Vehicule
{
    private $id_vehicule;
    private $type_vehicule;
    private $dispo_vehicule;
    private $marque;
    private $modele;
    private $num_serie;
    private $couleur;
    private $plaque_immatriculation;
    private $nb_kilometres;
    private $date_achat;
    private $prix_achat;
    private $image;

    public function __construct()
    {

    }

    //----------------------------LES GETTERS

    public function getIdVehicule() : int
    {
        return $this->id_vehicule;
    }

    /**
     * @return string
     */
    public function getTypeVehicule() : string
    {
        return $this->type_vehicule;
    }

    /**
     * @return mixed
     */
    public function getDispoVehicule() : int
    {
        return $this->dispo_vehicule;
    }

    /**
     * @return mixed
     */
    public function getMarque() : string
    {
        return $this->marque;
    }

    /**
     * @return mixed
     */
    public function getModele() : string
    {
        return $this->modele;
    }

    /**
     * @return mixed
     */
    public function getNumSerie() : string
    {
        return $this->num_serie;
    }

    /**
     * @return mixed
     */
    public function getCouleur() : string
    {
        return $this->couleur;
    }

    /**
     * @return mixed
     */
    public function getPlaqueImmatriculation() : string
    {
        return $this->plaque_immatriculation;
    }

    /**
     * @return mixed
     */
    public function getNbKilometres() : int
    {
        return $this->nb_kilometres;
    }

    /**
     * @return mixed
     */
    public function getDateAchat() : DateTime
    {
        return $this->date_achat;
    }

    /**
     * @return mixed
     */
    public function getPrixAchat() : float
    {
        return $this->prix_achat;
    }

    /**
     * @return mixed
     */
    public function getImage() : Image
    {
        return $this->image;
    }


    //------------------------------------------- SETTERS -----------------------------------

    /**
     * @param mixed $id_vehicule
     */
    public function setIdVehicule($id_vehicule): void
    {
        $this->id_vehicule = $id_vehicule;
    }

    /**
     * @param mixed $type_vehicule
     */
    public function setTypeVehicule($type_vehicule): void
    {
        $this->type_vehicule = $type_vehicule;
    }

    /**
     * @param mixed $dispo_vehicule
     */
    public function setDispoVehicule($dispo_vehicule): void
    {
        $this->dispo_vehicule = $dispo_vehicule;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele): void
    {
        $this->modele = $modele;
    }

    /**
     * @param mixed $num_serie
     */
    public function setNumSerie($num_serie): void
    {
        $this->num_serie = $num_serie;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * @param mixed $plaque_immatriculation
     */
    public function setPlaqueImmatriculation($plaque_immatriculation): void
    {
        $this->plaque_immatriculation = $plaque_immatriculation;
    }

    /**
     * @param mixed $nb_kilometres
     */
    public function setNbKilometres($nb_kilometres): void
    {
        $this->nb_kilometres = $nb_kilometres;
    }

    /**
     * @param mixed $date_achat
     */
    public function setDateAchat($date_achat): void
    {
        $this->date_achat = $date_achat;
    }

    /**
     * @param mixed $prix_achat
     */
    public function setPrixAchat($prix_achat): void
    {
        $this->prix_achat = $prix_achat;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }
}