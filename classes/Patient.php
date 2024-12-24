<?php
require_once __DIR__.'/Utilisateur.php';

class Patient extends Utilisateur{
    private $rendez_vous;

    public function __construct($nom, $prenom, $type_utilisateur, $rendez_vous){
        parent::__construct($nom, $prenom, $type_utilisateur);
        $this->rendez_vous = $rendez_vous;
    }

    public function prendreRendezVous($rendez_vous){
        $this->rendez_vous = $rendez_vous;
    }

    public function __toString(){
        return $this->nom.' - '. $this->prenom.' - '.$this->type_utilisateur.' - '.$this->rendez_vous;
    }
}