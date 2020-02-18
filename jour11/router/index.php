<?php
// TODO : récupérer le paramètre page dans l'url en GET
if (!empty($_REQUEST['searchText'])) {
    // passer la chaîne de caractères en minuscules
    // $page = strtolower($_REQUEST['page']).'.php';

    // TODO : récupérer et afficher le template correspondant

    // vérifier si le template existe
    $templates = scandir('templates', 1);

    // TODO: vérifier si le paramètre page passé dans l'url correspond à un template existant
    // print_r($templates);
}

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Router PHP</title>
</head>
<body>
    <form action="">
        <input type="text" name= 'searchText'>
        <input type="submit" value="Menu">

        <?php $search=$_REQUEST["searchText"]; 
            $page = strtolower($search).'.php';

        // var_dump($search);
        ?>
    </form>
    <?php
        if (isset($_REQUEST['searchText'])) {
            if (in_array($page, $templates)) {
                
                require_once "templates/{$page}";
                
            } else {
                require_once 'templates/404.php';
            }
        }

     ?>
</body>
</html>