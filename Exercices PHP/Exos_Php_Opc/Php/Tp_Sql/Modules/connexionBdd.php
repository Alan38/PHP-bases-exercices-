<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'alan38160');
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>