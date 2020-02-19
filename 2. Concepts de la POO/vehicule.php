<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

class Vehicule {
    public $_marque;
    public $_puissance;
    public $_kilometrage;

    public function getCaracteristiques()
    {
        return '<p>Marque: '.$this->_marque.', Puissance: '.$this->_puissance.', Kilométrage: '.$this->_kilometrage.'</p>';
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
    }
}
?>