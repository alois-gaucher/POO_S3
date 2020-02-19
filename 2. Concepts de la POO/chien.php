<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

class Chien {
    public $race;
    public $age;
    public $poids;

    /**
     * @return mixed
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * @param mixed $race
     */
    public function setRace($race): void
    {
        $this->race = $race;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * @param mixed $poids
     */
    public function setPoids($poids): void
    {
        $this->poids = $poids;
    }

    public function getCaracteristiques()
    {
        return '<p>Race: '.$this->race.', Âge: '.$this->age.', Poids: '.$this->poids.'</p>';
    }

    public function ajouterPoids($poids)
    {
        $this->poids += $poids;
    }

    public function ajouterAge($age)
    {
        $this->age = $age+1;
    }
}