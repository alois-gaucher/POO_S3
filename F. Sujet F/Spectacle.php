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
    static $nbOeuvre = 0;

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

        self::$nbOeuvre++;
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
        $html = 'Nombre d\'oeuvres: '.self::$nbOeuvre.'';
        
        return $html;
    }

}