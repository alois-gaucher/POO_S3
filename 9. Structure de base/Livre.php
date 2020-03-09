<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */


abstract class Livre {
    protected $titre;
    protected $nb_pages;
    protected $auteurs = array();

    /**
     * Livre constructor.
     * @param $titre
     * @param $nb_pages
     */
    public function __construct($titre, $nb_pages)
    {
        $this->titre = $titre;
        $this->nb_pages = $nb_pages;
    }

    public function addAuteur($auteur) {
        $this->auteurs[] = $auteur;
    }

    public function supprimerAuteur($auteur) {
        array_keys($this->auteurs, $auteur);
    }

    public function afficheLivre() {
        if ($this->auteurs =='') {
            $html = 'Le livre '.$this->titre.' contient '.$this->nb_pages.'. pages.<br>';
        }
        else {
            $html = 'Le livre '.$this->titre.' écrit par '.$this->auteurs.' contient '.$this->nb_pages.'. pages.<br>';
        }
        return $html;
    }
}