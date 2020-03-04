<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

static $specialite = 'Dessiner';

class Dessinateur extends Artiste {

    public function __construct($nom, $prenom, $date_naissance, $photo)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->photo = $photo;
    }

    public function sePresente() {
        $html = 'Je m\'appelle '.$this->prenom.' '.$this->nom.', je suis dessinateur et je suis né le '.$this->date_naissance.'.<br>';
        return $html;
    }
}