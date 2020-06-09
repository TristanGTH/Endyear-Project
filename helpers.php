<?php

function dbConnect(){

    try{
        $db = new PDO('mysql:host=localhost;dbname=tristanendyear;charset=utf8', 'root', '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //affichage des erreurs
    }
    catch (Exception $exception) //$exception contiendra les éventuels messages d’erreur
    {
        die( 'Erreur : ' . $exception->getMessage() );

        //la fonction die arrête le script et peut afficher un message
        //le catch n’est appelé que si une erreur survient au try
    }

    return $db;

}
