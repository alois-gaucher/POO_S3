<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

class SpectacleVivant extends Spectacle
{
    protected $type;

    public function __construct($nom, $anneeCreation, $categorieSpectacle)
    {
        parent::__construct($nom, $anneeCreation, $categorieSpectacle);
    }

    public function informationsSpectacle()
    {
        $html = 'Nom: '.$this->nom.'<br>';
        $html .= 'Année de création: '.$this->anneeCreation.'<br>';
        $html .= 'Catégorie: '.$this->categorieSpectacle.'<br>';

        return $html;
    }
}