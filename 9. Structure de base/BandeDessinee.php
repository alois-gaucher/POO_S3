<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */


final class BandeDessinees extends Livre {
    protected $dessinateurs;
    protected $auteurs;

    public function __construct($titre, $nb_pages)
    {
        parent::__construct($titre, $nb_pages);
    }

    public function addDessinateur($dessinateur) {
        $this->dessinateurs[] = $dessinateur;
        $html = 'L\'auteur '.$dessinateur.' a été ajouté à la liste des dessinateurs.<br>';
        return $html;

    }

    public function afficheLivre() {
        if ($this->dessinateurs =='') {
            $html = 'La BD '.$this->titre.' contient '.$this->nb_pages.' pages.<br>';
        }
        else {
            $html = 'La BD '.$this->titre.' dessinée par '.$this->dessinateurs.' contient '.$this->nb_pages.' pages.<br>';
        }
        return $html;
    }
}

?>