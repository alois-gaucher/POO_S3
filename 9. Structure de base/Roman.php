<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

final class Roman extends Livre {
    protected $auteurs = array();

    public function __construct($titre, $nb_pages)
    {
        parent::__construct($titre, $nb_pages);
    }

    public function addAuteur($auteurRoman) {
        array_push($this->auteurs, $auteurRoman);
    }
}
