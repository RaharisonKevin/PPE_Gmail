<?php
   
    try{
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=user_inscription','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
        $requete = 'SELECT * FROM `compte` where user = \''.$login.'\' and password = \''.$mdp.'\'';
        $reponse = $bdd->query($requete);
        $value = $reponse->fetchAll();
        $reponse->closeCursor();

    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
?>