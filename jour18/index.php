<?php


// require_once "Db.php";

// $pdo new Db();

// $dbh = $pdo->$connect();

// paramétres : 
// adresse du serveur de BDD
// nom d'utilisateur BDD
// mdp BDD : string 

try {
    //code...
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=ismail;charset=utf8","ismail","0665454061");
    echo "Succefully connected to database";
} catch (PDOException $error) {
    //throw $th;
    echo "Failed connecting to database : " . $error->getMessage();
}



