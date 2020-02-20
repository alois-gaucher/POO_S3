<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

abstract class VehiculeAMoteur {
    protected $typemoteur;
    protected $nombrepassagers;
    static protected $nombrevehicules;

    /**
     * VehiculeAMoteur constructor.
     * @param $typemoteur
     * @param $nombrepassagers
     */
    public function __construct($typemoteur, $nombrepassagers)
    {
        $this->typemoteur = $typemoteur;
        $this->nombrepassagers = $nombrepassagers;
    }

    public function verificationtype($type)
    {
        if ($type = 'T' or 'E')
        {
            return $type;
            $this->typemoteur = $type;
        }
        else
        {
            return 'Erreur';
        }
    }

    public function verificationnbpassagers($nombre)
    {
        if (is_integer($nombre))
        {
            $this->nombrepassagers = $nombre;
            return 'Valeur affectée à $this->nombrepassagers';
        }
        else
        {
            return 'Erreur';
        }
    }
}

class Voiture extends VehiculeAMoteur {
    protected $marque;
    protected $puissance;

    public function __construct($typemoteur, $nombrepassagers, $marque, $puissance)
    {
        parent::__construct($typemoteur, $nombrepassagers);
        $this->marque = $marque;
        $this->puissance = $puissance;
    }

    public function lirecaracteristiques()
    {
        return 'La voiture est une voiture '.$this->typemoteur.', elle comporte '.$this->nombrepassagers.' places. <br>';
        return 'Elle est de marque '.$this->marque.' et son moteur développe '.$this->puissance.' chevaux. <br>';
    }
}

final class VoitureDeSport extends Voiture {
    protected $zeroacent;

    public function __construct($typemoteur, $nombrepassagers, $marque, $puissance, $zeroacent)
    {
        parent::__construct($typemoteur, $nombrepassagers, $marque, $puissance);
        $this->zeroacent = $zeroacent
    }

    public function lirecaracteristiques()
    {
        return 'La voiture est une voiture '.$this->typemoteur.', elle comporte '.$this->nombrepassagers.' places. <br>';
        return 'Elle est de marque '.$this->marque.' et son moteur développe '.$this->puissance.' chevaux et permet un 0 à 100 km/h en '.$this->zeroacent.' secondes. <br>';
    }
}

?>