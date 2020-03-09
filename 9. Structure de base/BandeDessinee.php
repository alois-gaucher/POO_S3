<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */


final class BandeDessinees extends Livre {
    protected $dessinateurs = array();
    protected $auteurs = array();

    public function addDessinateur($dessinateur) {
            array_push($dessinateurs, $dessinateur);
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