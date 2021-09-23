<?php
    include 'header.php';
try {
    $id = (int)$_GET['id'];
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $personnagesManager = new PersonnagesManager($db);
    
} catch (PDOException $e) {
    print('<br/>Erreur de connexion : ' . $e->getMessage());
}
