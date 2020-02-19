<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */


class Vehicule
{
    protected $_marque;
    protected $_puissance;
    protected $_kilometrage;

    /**
     * Vehicule constructor.
     * @param $_marque
     * @param $_puissance
     * @param $_kilometrage
     */
    public function __construct($_marque, $_puissance, $_kilometrage)
    {
        $this->_marque = $_marque;
        $this->_puissance = $_puissance;
        $this->_kilometrage = $_kilometrage;
    }


    public function getCaracteristiques()
    {
        return '<p>Marque: ' . $this->_marque . ', Puissance: ' . $this->_puissance . ', Kilométrage: ' . $this->_kilometrage . '</p>';
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->_marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque): void
    {
        $this->_marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getPuissance()
    {
        return $this->_puissance;
    }

    /**
     * @param mixed $puissance
     */
    public function setPuissance($puissance): void
    {
        $this->_puissance = $puissance;
    }

    /**
     * @return mixed
     */
    public function getKilometrage()
    {
        return $this->_kilometrage;
    }

    /**
     * @param mixed $kilometrage
     */
    public function setKilometrage($kilometrage): void
    {
        $this->_kilometrage = $kilometrage;
        echo 'Le véhicule a maintenant '.$this->_kilometrage.' km au compteur';
    }
}

class Voiture extends Vehicule {
    protected $type;

    /**
     * Voiture constructor.
     * @param $_marque
     * @param $_puissance
     * @param $_kilometrage
     * @param $type
     */
    public function __construct($_marque, $_puissance, $_kilometrage, $type)
    {
        parent::__construct($_marque, $_puissance, $_kilometrage);
        if ($type == ('berline' or 'suv' or '4x4' or 'break')) {
            $this->type = $type;
        }
        else return 'Ce type de véhicule n\'est pas autorisé !';
    }

    public function lire_type() {
        return 'La voiture est de type: '.$this->type.'.<br>';
    }

    public function getCaracteristiques()
    {
        return '<p>Type: '.$this->type.', Marque: ' . $this->_marque . ', Puissance: ' . $this->_puissance . ', Kilométrage: ' . $this->_kilometrage . '</p>';
    }
}

class Bus extends Vehicule {
    protected $nb_places;
    protected $nb_essieux;

    /**
     * Voiture constructor.
     * @param $_marque
     * @param $_puissance
     * @param $_kilometrage
     * @param $nb_places
     */
    public function __construct($_marque, $_puissance, $_kilometrage, $nb_places, $nb_essieux)
    {
        parent::__construct($_marque, $_puissance, $_kilometrage);
        $this->nb_places = $nb_places;
        $this->nb_essieux = $nb_essieux;
    }

    public function lire_places() {
        return 'Le bus a : '.$this->nb_places.' places <br>';
    }

    public function getCaracteristiques()
    {
        return '<p>Nombre d\'essieux: '.$this->nb_essieux.', Nombre de places: '.$this->nb_places.', Marque: ' . $this->_marque . ', Puissance: ' . $this->_puissance . ', Kilométrage: ' . $this->_kilometrage . '</p>';
    }
}

?>