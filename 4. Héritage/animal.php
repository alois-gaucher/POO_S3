<?php
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
?>