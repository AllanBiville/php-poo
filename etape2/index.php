<?php
function chargerClasse(string $classe){
    include $classe . '.php';
    // include_once $classe . '.php';
    // require $classe . '.php';
}
spl_autoload_register('chargerClasse');

try{
    $db = new PDO($dsn,$user,$password);
    if ($db){
        print('<br/>Lecture de la base de données :');
    }
}
print("<br/>Pour infos, la force faible = " . Personnage::FORCE_PETITE);
print("<br/>Pour infos, la force moyenne = " . Personnage::FORCE_MOYENNE);
print("<br/>Pour infos, la force grande = " . Personnage::FORCE_GRANDE);
print ("<h1><center>Jeu de combat</center></h1>");

// $perso1->parler();
// $perso1->gagnerExperience();
// print("Expérience = " . $perso1->afficherExperience());

// $perso1->definirForce(20);
// $perso1->definirExperience(15);

// $perso2->definirForce(60);
// $perso2->definirExperience(1);
// print($perso1);


print("<h1>Création des personnages...</h1>");
$perso1 = new Personnage("Tchoupi");
Personnage::parler();
$perso2 = new Personnage("InspecteurGadget", Personnage::FORCE_MOYENNE , 0);
Personnage::parler();
print("<h1>Actions des personnages...</h1>");

$perso1->frapper($perso2);
$perso2->frapper($perso1);

print("<h1>Dégats des personnages...</h1>");
print("Dégats du joueur 1 = " . $perso1->getDegats());
print("<br/>Dégats du joueur 2 = " . $perso2->getDegats()."<br/>");
print("Dégats du perso1" . $perso1->setNom('UnGars')->setExperience(15)->frapper($perso2)->getDegats());

print("<h1>Résultat du combat...</h1>");
$perso1->getResultat();
$perso2->getResultat();


