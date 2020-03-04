<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

class Artiste extends Humain {
    protected $specialite;
    protected $photo;

    public function __construct($nom, $prenom, $date_naissance, $specialite, $photo)
    {
        parent::__construct($nom, $prenom, $date_naissance);
        $this->specialite = $specialite;
        $this->photo = $photo;
    }

    public function sePresente() {
        $html = 'Je m\'appelle '.$this->prenom.' '.$this->nom.', je suis '.$this->specialite.' et je suis né le '.$this->date_naissance.'.<br>';
        return $html;
    }
}