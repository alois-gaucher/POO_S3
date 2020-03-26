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
            $html .= 'Catégorie: Vivant<br>';
            $html .= 'Type: Théâtre<br>';

            return $html;
        }

        else {
            $html = 'Type: Théâtre';
            $html .= 'Acteurs: ';
            $html .= '<ul>';
            $html .= $this->ajoutActeur();
            $html .= '</ul>';
        }

        return $html;
    }

    public function ajoutActeur() // TODO: A finir
    {
        $html = '<p>';
        foreach ($this->acteurs as $acteur)
        {
            $html .= $acteur->afficheCv();
            $html .= '<br>';
        }
        $html .= '</p>';

        return $html;
    }

    public function addActeur($acteur) // TODO: A finir
    {
        $this->acteurs[] = $acteur;
    }

    public function modifierRoleActeur($nom, $role) // TODO: A finir
    {
        $key = array_search($nom, $this->acteurs['role']);
        $this->acteurs['role'[$key]] = $role;
    }

}