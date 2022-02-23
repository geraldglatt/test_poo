<?php

class Personne{
    //attributs de la classe
    public $nom;
    public $prenom;
    public $dateDeNaissance;
    public $taille;
    public $sexe;

    //Constantes
    const NOMBRE_DE_BRAS = 2;
    const NOMBRE_DE_JAMBES = 2;
    const NOMBRE_DE_YEUX = 2;
    const NOMBRE_DE_PIEDS = 2;
    const NOMBRE_DE_MAINS = 2;

    //Méthodes
    public function __construct(){}

    public function boire()
    {
        echo "la personne boit<br/>";
    }
    public function manger()
    {
        echo "La personne mange<br/>";
    }

}

//Main
$personne1 = new Personne;
$personne2 = new Personne;
$personne3 = new Personne;
$personne4 = new Personne;
$personne5 = new Personne;

//definition des attributs de la personne 1
$personne1->nom = 'Hamon';
$personne1->prenom = 'Hugo';
$personne1->dateDeNaissance = '02-07-1987';
$personne1->taille = '180';
$personne1->sexe = 'M';

// Définition des attributs de la personne 2
$personne2->nom = 'Dubois';
$personne2->prenom = 'Michelle';
$personne2->dateDeNaissance = '18-11-1968';
$personne2->taille = '166';
$personne2->sexe = 'F';

// Définition des attributs de la personne 3
$personne3->nom = 'Durand';
$personne3->prenom = 'Béatrice';
$personne3->dateDeNaissance = '02-08-1975';
$personne3->taille = '160';
$personne3->sexe = 'F';

// Définition des attributs de la personne 4
$personne4->nom = 'Martin';
$personne4->prenom = 'Pierre';
$personne4->dateDeNaissance = '23-05-1993';
$personne4->taille = '155';
$personne4->sexe = 'M';

//Accès en lecture
echo 'personne 1 :<br/><br/>';
echo 'Nom :'.$personne1->nom.'<br/>';
echo 'Prénom : '.$personne1->prenom.'<br/>';
echo 'Elle est né le :'.$personne1->dateDeNaissance.'<br/>';
echo 'Cette personne mesure'.$personne1->taille.'<br/>';
echo 'Cette personne est de : '.$personne1->sexe.'<br/>';

echo 'chaque personne à  '.Personne::NOMBRE_DE_YEUX.' yeux<br/>';

$personne1->boire();
$personne2->boire();
$personne3->manger();
$personne4->manger();