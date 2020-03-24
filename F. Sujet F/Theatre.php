<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

class Theatre extends SpectacleVivant
{
    protected $type = 'Théâtre';
    protected $acteurs = array();

    public function __construct($nom, $anneeCreation)
    {
        $this->nom = $nom;
        $this->anneeCreation = $anneeCreation;
        $this->acteurs = settype($this->acteurs, "Array");
    }

    public function informationsSpectacle()
    {
        if (empty($acteurs))
        {
            $html = 'Nom: '.$this->nom.'<br>';
            $html .= 'Année de création: '.$this->anneeCreation.'<br>';
            $html .= 'Catégorie: '.$this->categorieSpectacle.'<br>';
            $html .= 'Type: Théâtre<br>';

            return $html;
        }

        else {
            $html = 'Type: Théâtre';
            $html .= 'Acteurs: ';
            $html .= '<ul>';
            foreach ($this->acteurs['nom'] as $value)
            {
                $html .= '<li>'.$value.'</li>';
            };
            $html .= '</ul>';
        }

        return $html;
    }

    public function addActeur($acteur)
    {
        array_push($this->acteurs['nom'], $acteur['nom']);
        array_push($this->acteurs['prenom'], $acteur['prenom']);
        array_push($this->acteurs['role'], $acteur['role']);
        $html = 'L\'acteur '.$acteur['nom'].' a été ajouté <br>';

        return $html;
    }

    public function modifierRoleActeur($nom, $role)
    {
        $key = array_search($nom, $this->acteurs['role']);
        $this->acteurs['role'[$key]] = $role; // TODO: A finir
    }

}