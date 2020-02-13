<?php

$name = "ISMAIL AYDIN";
$adresse = "11 Avenue des Infirmeries Les Eglantines BAT-3 13100 Aix-en-Provence";
$telephone = "0665454061";
$email = "i.aydin20014@gmail.com";


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My CV</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header>

        <img class="profilePhoto" src="assets/img/profile.jpg" alt="Profile Photo">
        <h1 class="name"><?php echo $name ?></h1>

        <p class="informations"><?php echo $adresse. ' | '. $telephone. ' | '. $email ?></p>

    </header>
    <main>