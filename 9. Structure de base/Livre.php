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

    public function liretableau($tableau)
    {
        foreach($key as $element)
        {
            echo $element . ', '; // affichera $prenoms[0], $prenoms[1] etc.
        }
    }

    /**
     * @return mixed
     */
    public function getAuteurs()
    {
        return $this->auteurs;
    }

    public function __construct($titre, $nb_pages)
    {
        $this->titre = $titre;
        $this->nb_pages = $nb_pages;
    }

    public function addAuteur($auteur) {
        array_push($this->auteurs[], $auteur);
        $html = 'L\'auteur '.$auteur.' a été ajouté à la liste des auteurs.<br>';
        return $html;
    }

    public function supprimerAuteur($auteur) {
        array_keys($this->auteurs, $auteur);
    }

    public function afficheLivre() {
        if (empty($auteurs)) {
            $html = 'Le livre '.$this->titre.' contient '.$this->nb_pages.'. pages.<br>';
        }
        else {
            $html = 'Le livre '.$this->titre.' écrit par contient '.$this->nb_pages.'. pages.<br>';
            foreach($auteurs as $element)
            {
                $html += $element . ', '; // affichera $prenoms[0], $prenoms[1] etc.
            };
        }
        return $html;
    }
}