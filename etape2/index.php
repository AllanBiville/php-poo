<?php
include 'header.php';
try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $personnagesManager = new PersonnagesManager($db);
    $personnages = $personnagesManager->getList();

    print ('<br/>Liste des personnages : ');
    foreach ($personnages as $personnage) {
        print ('<br/><a target="_blank" href="Personnage_view.php?id='. $personnage->getId().'">' . $personnage->getNom()."</a>");
        
    }
    // $db-> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    // if ($db){
    //     // print('<br/>Lecture de la base de données :');
    //     $request = $db->query('SELECT id,nom,`force`, degats,niveau, experience FROM personnages;');
    //     while($ligne = $request->fetch(PDO::FETCH_ASSOC))
    //     {
    //         $perso = new Personnage($ligne);
    //         print('<br/>' . $perso->getNom() . ' a ' . $perso->getForce() . ' de force, ' . $perso->getDegats() . ' de dégats, ' .
    //         $perso->getExperience() . ' d\'expérience et est au niveau ' . $perso->getNiveau(). '.');
    //     }
    // }
} catch (PDOException $e) {
    print('<br/>Erreur de connexion : ' . $e->getMessage());
}
