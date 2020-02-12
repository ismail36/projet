<?php

$photos = glob("assets/img/photo*.jpg");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photographs</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>Photographs</h1>
    </header>
    <main>
    <div class="container">
         <?php
            foreach($photos as $image)
            {
                
                echo
            <<<CODEHTML
            <img src="$image" alt="$image"> 
            CODEHTML;
            }
        ?>
    
    </div>
        
    </main>
    <footer>
    
    </footer>
</body>
</html>
