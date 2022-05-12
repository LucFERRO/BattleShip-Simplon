<?php

function connexion(){
    $servername = "localhost";
    $username = "LOLOL";
    $password = "LOLOLO!";
    $dbname = "LOLOLOL";
    try{
        $db = new PDO(
            'mysql:host='.$servername.';dbname='.$dbname.';charset=UTF8',
            $username,
            $password
        );
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
    catch(Exception $e){
        die('Erreur:'.$e->getMessage());
    }
    
}

?>
