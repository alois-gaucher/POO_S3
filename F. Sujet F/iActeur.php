<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */


interface iActeur
{
    public function __construct($nom, $prenom, $role);
    public function afficheCv();
}