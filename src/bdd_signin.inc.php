<?php
try{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=user_inscription','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
    $req = $bdd->prepare('INSERT INTO user_mail (nom, prenom, mail, password) VALUES (?, ?, ?, ?)');
    $req->execute(array($_POST["nom"], $_POST["prenom"], $_POST["mail"], $_POST["password"]));
    header("location:../login.php"); 
     }catch(Exception $e)
     {
         die('Erreur : '.$e->getMessage());
     }

     
    
?>