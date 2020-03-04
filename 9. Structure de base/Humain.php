<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */


abstract class Humain {
    protected $nom;
    protected $prenom;
    protected $date_naissance;

    /**
     Constructeur de 'Humain'
     */
    public function __construct($nom, $prenom, $date_naissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
    }

    public function sePresente() {
        $html = 'Je suis '.$this->prenom.' '.$this->nom.' et je suis né le '.$this->date_naissance.'.<br>';
        return $html;
    }


}