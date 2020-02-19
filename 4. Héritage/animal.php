<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

// Classe Animal
class Animal {
    public $nom;
    public $age_actuel;
    public $age_theorique;
    public $regime = array();
    public $etat = 'vivant';

    /**
     * Animal constructor.
     * @param $nom
     * @param $age_actuel
     * @param $age_theorique
     */
    public function __construct($nom, $age_actuel, $age_theorique)
    {
        $this->nom = $nom;
        $this->age_actuel = $age_actuel;
        $this->age_theorique = $age_theorique;
    }

    public function lire_informations() {
        echo 'Nom: '.$this->nom.' Âge: '.$this->age_actuel.' Etat: '.$this->etat.'<br>';
    }

    public function mange($aliment) {
        if ($this->etat == 'vivant') {
            array_push($this->regime, $aliment);
            echo 'L\'animal mange maintenant: '.$aliment.'<br>';
        }
        else {
            echo 'L\'animal ne peut pas manger s\'il est mort! <br>';
        }
    }

    public function vieillir($nbannees) {
        if ($this->etat == 'vivant') {
            $this->age_actuel = $this->age_actuel + $nbannees;
            echo 'L\'animal a maintenant '.$this->age_actuel.' ans <br>';
        }
        else {
            echo 'Un animal mort ne peut pas vieillir ! <br>';
        }
    }

    public function lire_regime() {
        echo 'L\'animal peut manger: <br>';
        foreach ($this->regime as $value) {
            echo $value .'<br>';
        }
    }
}

// Classe héritée de "Animaux"
class Chien extends Animal {
    public $nom_familier;
    public $age_theorique = 18;

    // Chien constructor.
    public function __construct($nom,$age_actuel,$nom_familier)
    {
        parent::__construct($nom, $age_actuel, 18);
        $this->nom_familier = $nom_familier;
    }

    public function seNomme() {
        echo 'Le chien se nomme: ' .$this->nom_familier.'<br>';
    }

    public function vieillir($nbannees) {
        if ($this->etat == 'vivant') {
            if ($this->age_actuel + $nbannees <= $this->age_theorique) {
                $this->age_actuel = $this->age_actuel + $nbannees;
                echo 'L\'animal a maintenant ' . $this->age_actuel . ' ans <br>';
            }
            else {
                echo 'L\'animal est trop vieux maintenant, il est mort !<br>';
            }
        }
        else {
            echo 'Un animal mort ne peut pas vieillir ! <br>';
        }
    }

    public function lire_informations() {
        echo 'Nom familier: '.$this->nom_familier.' Nom: '.$this->nom.' Âge: '.$this->age_actuel.' Âge théorique: '.$this->age_theorique.' Etat: '.$this->etat.'<br>';
    }
}

?>