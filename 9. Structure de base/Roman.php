<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

final class Roman extends Livre {
    protected $auteurs = array();

    public function addAuteur($auteurRoman) {
        array_push($auteurs, $auteurRoman);
    }
}
