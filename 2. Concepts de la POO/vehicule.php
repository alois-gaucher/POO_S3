<?php
class Vehicule {
    public $_marque;
    public $_puissance;
    public $_kilometrage;

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