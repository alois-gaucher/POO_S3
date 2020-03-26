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
    }

    public function informationsSpectacle()
    {
            $html = 'Nom: '.$this->nom.'<br>';
            $html .= 'Année de création: '.$this->anneeCreation.'<br>';
            $html .= 'Catégorie: Vivant<br>';
            $html .= 'Type: Théâtre<br>';
            $html .= 'Acteurs:';
            $html .= '<ul>';
            $html .= $this->afficheActeurs();
            $html .= '</ul>';
        return $html;
    }

    public function afficheActeurs() // TODO: A finir
    {
        $html = '<p>';
        foreach ($this->acteurs as $item)
        {
            $html .= $item->afficheCv($this->getActeurs());
            $html .= '<br>';
        }
        $html .= '</p>';

        return $html;
    }

    public function getActeurs()
    {
        return $this->acteurs;
    }

    public function addActeur($acteur)
    {
        $this->acteurs[] = $acteur;
    }

    public function modifierRoleActeur($nom, $role)
    {
        $mr = $this->acteurs[array_search($nom,$this->getActeurs())];
        $mr->setRole($role);
    }

    public function supprimerActeur($nom) {
        unset($this->acteurs[array_search($nom,$this->getActeurs())]);
    }

}