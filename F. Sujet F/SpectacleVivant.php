<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

class SpectacleVivant extends Spectacle
{
    protected $type;

    public function __construct($nom, $anneeCreation, $categorieSpectacle, $type)
    {
        parent::__construct($nom, $anneeCreation, $categorieSpectacle);
        $this->type = $type;
        settype($this->type,"string");
    }

    public function informationsSpectacle()
    {
        $html = 'Nom: '.$this->nom.'<br>';
        $html .= 'Année de création: '.$this->anneeCreation.'<br>';
        $html .= 'Catégorie: '.$this->categorieSpectacle.'<br>';
        $html .= 'Type: '.$this->type.'<br>';

        return $html;
    }
}