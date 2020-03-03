
        <section id="section-register">
            <form action="#section-register" method="POST">
                <label for="nom">Nom </label>
                <input type="text" name="nom" required placeholder="Entrez nom"><br>
                <label for="prenom">Prénom </label>
                <input type="text" name="prenom" required placeholder="Entrez prénom"><br>
                <label for="lesson">Leçon </label>
                <input type="text" name="lesson" required placeholder="Entrez lecon"><br>
                <label for="point1">Point-1 </label>
                <input type="number" name="point1" required placeholder="Entrez point-1"><br>
                <label for="point2">Point-2 </label>
                <input type="number" name="point2" required placeholder="Entrez point-2"><br>
                <label for="point3">Point-3 </label>
                <input type="number" name="point3" required placeholder="Entrez point-3"><br><br>
                <input type="reset">
                <button id="save">Save</button><br>
            </form>
        </section>

        <script>
        var btn = document.getElementById("save");
        if(btn.clicked==true){
            btn.addEventListener("click", function(){

        })
        }
        
        
    </script>

<?php


if($nom != null ) {

    $nom =$_REQUEST('nom');
    $prenom =$_REQUEST('prenom');
    $lesson =$_REQUEST('lesson');
    $point1 =$_REQUEST('point1');
    $point2 =$_REQUEST('point2');
    $point3 =$_REQUEST('point3');
    

    $requeteSQL =
<<<CODESQL

INSERT INTO students 
(nom, prenom, lessn, pnt1, pnt2, pnt3) 
VALUES 
("$nom", "$prenom", "$lesson", "$point1", "$point2", "$point3");

CODESQL;

$pdo = new PDO("mysql:host=127.0.0.1;dbname=ismail;charset=utf8","students","0665454061" );

$pdo->exec($requeteSQL);

}
     

?>