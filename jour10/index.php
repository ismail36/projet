<?php

    require_once 'php/model/glossaire.php';

    //print_r($glossaire);

    function displayRandomTerm($array) {
        $length = count($array);
        $index = mt_rand(0, $length -1);

        // echo '<pre>';
        // print_r($array[$index]);
        // echo '</pre>';

        $title = $array[$index]['title'];
        $description = $array[$index]['description'];

        $html = 

<<<OUTPUT

        <div class="container">
            <h1>Le terme est: {$title}</h1>
            <p>La définition est: {$description}</p>
        </div>
    
OUTPUT;

        echo $html;

    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Glossaire des termes OPQUAST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="collapse navbar-collapse" id="navbarColor01">
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit" >Afficher un terme aléatoire</button>
    </form>
  </div>
</nav>
   
    <?php displayRandomTerm($glossaire); ?>


</body>
</html>