<?php

require 'TypeVehicule.php';
require 'Marque.php';
require 'Disponibilite.php';
require 'Agence.php';

class  Vehicule
{
    private $id;
    private $type;
    private $dispo;
    private $agence
    private $marque;
    private $modele;
    private $numSerie;
    private $couleur;
    private $plaqueImmatriculation;
    private $nbKm;
    private $dateAchat;
    private $prixAchat;
    private $image;

    public function __construct($id, TypeVehicule $type, Disponibilite $dispo, Agence $agence, Marque $marque, $modele, $numSerie, $couleur, $plaqueImmatriculation, $nbKm, $dateAchat, $prixAchat, $image)
    {
        $this->id = $id;
        $this->type = $type;
        $this->dispo = $dispo;
        $this->agence = $agence;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->numSerie = $numSerie;
        $this->couleur = $couleur;
        $this->plaqueImmatriculation = $plaqueImmatriculation;
        $this->nbKm = $nbKm;
        $this->dateAchat = $dateAchat;
        $this->prixAchat = $prixAchat;
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type->getLabel();
    }

    /**
     * @param mixed $type
     */
    public function setType(TypeVehicule $type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getDispo()
    {
        return $this->dispo->getLabel();
    }

    /**
     * @param mixed $dispo
     */
    public function setDispo(Disponibilite $dispo)
    {
        $this->dispo = $dispo;
    }

    /**
     * @return Agence
     */
    public function getAgence()
    {
        return $this->agence->getLabel();
    }

    /**
     * @param Agence $agence
     */
    public function setAgence(Agence $agence)
    {
        $this->agence = $agence;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque->getLabel();
    }

    /**
     * @param mixed $marque
     */
    public function setMarque(Marque $marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    /**
     * @return mixed
     */
    public function getNumSerie()
    {
        return $this->numSerie;
    }

    /**
     * @param mixed $numSerie
     */
    public function setNumSerie($numSerie)
    {
        $this->numSerie = $numSerie;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getPlaqueImmatriculation()
    {
        return $this->plaqueImmatriculation;
    }

    /**
     * @param mixed $plaqueImmatriculation
     */
    public function setPlaqueImmatriculation($plaqueImmatriculation)
    {
        $this->plaqueImmatriculation = $plaqueImmatriculation;
    }

    /**
     * @return mixed
     */
    public function getNbKm()
    {
        return $this->nbKm;
    }

    /**
     * @param mixed $nbKm
     */
    public function setNbKm($nbKm)
    {
        $this->nbKm = $nbKm;
    }

    /**
     * @return mixed
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * @param mixed $dateAchat
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;
    }

    /**
     * @return mixed
     */
    public function getPrixAchat()
    {
        return $this->prixAchat;
    }

    /**
     * @param mixed $prixAchat
     */
    public function setPrixAchat($prixAchat)
    {
        $this->prixAchat = $prixAchat;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

}