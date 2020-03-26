<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

final class Acteur
{
    protected $nom;
    protected $prenom;
    protected $role;

    /**
     * Acteur constructor.
     * @param $nom
     * @param $prenom
     * @param $role
     */
    public function __construct($nom, $prenom, $role)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->role = $role;
    }

    public function afficheCv()
    {
        $html = 'Nom: '.$this->nom.'<br>';
        $html .= 'Prénom: '.$this->prenom.'<br>';
        $html .= 'Rôle: '.$this->role.'<br>';

        return $html;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
}