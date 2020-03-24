<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */


interface iTheatre
{
    public function __construct($nom, $anneeCreation);
    public function informationsSpectacle();
    public function addActeur($acteur);
    public function modifierRoleActeur($nom, $role);
}