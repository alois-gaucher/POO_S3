<?php

class Connexion_SQL {
    private $adresseip;
    private $nombase;
    private $utilisateur;
    private $mdp;

    public function __construct($adresseip, $nombase, $utilisateur, $mdp)
    {
        $this->adresseip = $adresseip;
        $this->nombase = $nombase;
        $this->utilisateur = $utilisateur;
        $this->mdp = $mdp;
    }

    public function lire_connexion()
    {
        if (filter_var($this->adresseip, FILTER_VALIDATE_IP)) {
            return ' Adresse IP: '.$this->adresseip.' Nom base: '.$this->nombase.' Utilisateur: '.$this->utilisateur.'<br>';
        }
        else {
            return 'L\'adresse IP '.$this->adresseip.' n\'est pas considérée comme valide.<br>';
        }
    }
}
?>