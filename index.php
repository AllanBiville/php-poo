<?php
include 'Personnage.php';

print ("<h1><center>Jeu de combat</center></h1>");

// $perso1->Parler();
// $perso1->gagnerExperience();
// print("Expérience = " . $perso1->afficherExperience());


$perso1 = new Personnage("Bouquet");
$perso1->definirForce(20);
$perso1->definirExperience(15);

$perso2 = new Personnage("Ricaud");
$perso2->definirForce(60);
$perso2->definirExperience(1);

$perso1->frapper($perso2);
$perso2->frapper($perso1);

print("<br/>Dégats du joueur 1 = " . $perso1->afficherDegats());
print("<br/>Dégats du joueur 2 = " . $perso2->afficherDegats());



