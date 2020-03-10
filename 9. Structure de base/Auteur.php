<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

static $specialite = 'Écrire';

class Auteur extends Artiste {

    public function __construct($nom, $prenom, $date_naissance, $photo)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->photo = $photo;
    }

    public function sePresente() {
        $html = 'Je m\'appelle '.$this->prenom.' '.$this->nom.', je suis auteur et je suis né le '.$this->date_naissance.'.<br>';
        return $html;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function nomPrenom()
    {
        $html = ''.$this->prenom.''.$this->nom.'';
        return $html;
    }
}
