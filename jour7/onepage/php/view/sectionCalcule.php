<?php

$nom = $_REQUEST['nom'];
$prenom = $_REQUEST['prenom'];

$note11=null;
$note12=null;
$note13=null;
$note21=null;
$note22=null;
$note23=null;
$note31=null;
$note32=null;
$note33=null;

$note11 = $_REQUEST['lec1Poin1'];
$note12 = $_REQUEST['lec1Poin2'];
$note13 = $_REQUEST['lec1Poin3'];

$note21 = $_REQUEST['lec2Poin1'];
$note22 = $_REQUEST['lec2Poin2'];
$note23 = $_REQUEST['lec2Poin3'];

$note31 = $_REQUEST['lec3Poin1'];
$note32 = $_REQUEST['lec3Poin2'];
$note33 = $_REQUEST['lec3Poin3'];

$lecon1=0;
$lecon2=0;
$lecon3=0;
$average=0;

$erreurMessage = "Vous ne pouvez pas laisser vide de notes !!!";
$erreurMessageNom = "Vous ne pouvez pas laisser vide de nom et prenom !!!";

if($nom == null || $prenom == null)
{
    echo $erreurMessageNom;
    require_once "creerCompte.php";
}
else if($note11 == null || $note12 == null || $note13 == null || $note21 == null || $note22 == null || 
        $note23 == null || $note31 == null || $note32 == null || $note33 == null)
{
    echo $erreurMessage;
    require_once "creerCompte.php";
}
else
{
    $lecon1 = ($note11 + $note12 + $note13) / 3;
    $lecon2 = ($note21 + $note22 + $note23) / 3;
    $lecon3 = ($note31 + $note32 + $note33) / 3;
    $average = ($lecon1 + $lecon2 + $lecon3) / 3;
}

echo $lecon1;
echo "<br>";
echo $lecon2;
echo "<br>";
echo $lecon3;
echo "<br>";
echo "Nom: ".$nom;
echo "<br>";
echo "Prenom: ".$prenom;

