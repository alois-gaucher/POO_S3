<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

interface iEleve
{
    public function afficheNomPrenom();
    public function convoque($date, $heure);
    public function ajouteNote($note);
    public function afficheNotes();
}

class Eleve implements iEleve
{

    protected $nom;
    protected $prenom;
    protected $convoque;
    protected $date;
    protected $heure;

    /**
     * Eleve constructor.
     * @param $nom
     * @param $prenom
     */
    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function afficheNomPrenom()
    {
        $html = 'NOM: '.$this->nom.' PRENOM: '.$this->prenom.'';
        return $html;
    }

    public function convoque($date, $heure)
    {
        $this->date = $date;
        $this->heure = $heure;
        $html = $this->afficheNomPrenom().' est convoqué le '.$date.' à '.$heure.'';
        return $html;
    }

    public function ajouteNote($note)
    {
        // TODO: Implement ajouteNote() method.
    }

    public function afficheNotes()
    {
        // TODO: Implement afficheNotes() method.
    }
}
?>