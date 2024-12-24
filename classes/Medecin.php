<?php
require_once __DIR__.'/Utilisateur.php';
require_once __DIR__.'/Patient.php';

class Medecin extends Utilisateur{
    private $specialite;
    private $patients;

    public function __construct($nom, $prenom, $type_utilisateur, $specialite){
        parent::__construct($nom, $prenom, $type_utilisateur);
        $this->specialite;
        $this->patients = [
            new Patient('test', 'test', 'patient', '2024-12-18'),
            new Patient('test1', 'test1', 'patient', '2024-12-30'),
            new Patient('test2', 'test2', 'patient', '2024-01-04')
        ];
    }

    public function consulterPatient(){
        foreach($this->patients as $patient){
            echo $patient.'<br>';
        }
    }
}