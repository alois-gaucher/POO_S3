<?php
//----------------------------------------------------
// fichier : personne2.php
// ---------------------------------------------------
// Notion d'encapsulation : protection des propriétés
// de l'objet.
// IUT de Troyes - MMI 2ème année
//----------------------------------------------------

class Personne2 {
    // Définition des attributs de la classe
    private $prenom;
    private $nom;
    private $age;

    // Définition de la fonction constructeur
    public function __construct($prenom, $nom, $age)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
    }

    // Définition du comportement sePresente()
    public function sePresente() {
        return 'Je m\'appelle '.$this->prenom.' '.$this->nom.' et j\'ai '.$this->age.' ans ';
    }

    // initialisation du nom en majsucules
    public function setNom($n){
        $this->nom=strtoupper($n);
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

}
?>