<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

abstract class Spectacle // Création de la classe Spectacle
{
    protected $nom;
    protected $anneeCreation;
    protected $categorieSpectacle;
    private $nbOeuvre;

    /**
     * Spectacle constructor.
     */
    public function __construct($nom, $anneeCreation, $categorieSpectacle)
    {
        $this->nom = $nom;
        $this->anneeCreation = $anneeCreation;
        $this->categorieSpectacle = $categorieSpectacle;

        settype($this->nom, "string");
        settype($this->anneeCreation, "integer");
        settype($this->categorieSpectacle, "string");
    }

    /**
     * @param mixed $nom
     */
    public function ModifierNom($nom): void
    {
        $this->nom = $nom;
    }


    /**
     * @return mixed
     */
    public function getNbSpectacle()
    {
        return $this->nbOeuvre;
    }

    /**
     * @param mixed $nbOeuvre
     */
    public function setNbSpectacle($nbOeuvre): void
    {
        $this->nbOeuvre = $nbOeuvre;
    }

}