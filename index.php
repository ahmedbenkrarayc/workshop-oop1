<?php

require './classes/Utilisateur.php';
require './classes/Patient.php';
require './classes/Medecin.php';

$user = new Utilisateur('use1', 'user1', 'user');
$user->changerNom('benkrara');
$user->changerPrenom('ahmed');
echo $user->afficherNomComplet().'<br>----------------------------utilisateur----------------------<br>';

$patient = new Patient('test', 'test', 'patient', '2024-12-18');
$patient->changerNom('benkrara');
$patient->prendreRendezVous('2024-12-19');
echo $patient.'<br>----------------------------Patient----------------------<br>';

$medecin = new Medecin('test', 'test', 'patient', '2024-12-18');
$medecin->changerNom('benkrara');
$medecin->consulterPatient();