<?php

class Chien {
    public $_race;
    public $_age;
    public $_poids;

    /**
     * Chien constructor.
     * @param $_race
     * @param $_age
     * @param $_poids
     */
    public function __construct($_race, $_age, $_poids)
    {
        $this->_race = $_race;
        $this->_age = $_age;
        $this->_poids = $_poids;
    }

    /**
     * @return mixed
     */
    public function getRace()
    {
        return $this->_race;
    }

    /**
     * @param mixed $race
     */
    public function setRace($race): void
    {
        $this->_race = $race;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->_age = $age;
    }

    /**
     * @return mixed
     */
    public function getPoids()
    {
        return $this->_poids;
    }

    /**
     * @param mixed $poids
     */
    public function setPoids($poids): void
    {
        $this->_poids = $poids;
    }

    public function ajouterPoids($poids)
    {
        $this->_poids = $poids+1;
    }

    public function ajouterAge($age)
    {
        $this->_age = $age+1;
    }
}