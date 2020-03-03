
        <section>
            <h2>liste des articles EN PHP ET SQL (READ)</h2>
            <div class="listeArticle">
<?php
// ON VA FAIRE UNE BOUCLE POUR CREER CHAQUE ARTICLE
// ET GENERALEMENT, ON A UN TABLEAU PHP SUR LEQUEL ON MET LA BOUCLE
// => AVEC UN TABLEAU ASSOCIATIF, ON VA POUVOIR RECUPERER LES MEMES INFOS
// EN PHP, UNE LIGNE SQL SERA UN TABLEAU ASSOCIATIF
/*
// LIGNE 1
$tabAsso1 = [ 
    "id"                => 1, 
    "titre"             => "cornavirus", 
    "contenu"           => "sera-t-il bloqué par les frontières ?", 
    "image"             => "assets/img/photo1.jpg", 
    "datePublication"   => "2020-03-03 00:00:00", 
    "categorie"         => "sante"
];
// LIGNE 2
$tabAsso2 = [ 
    "id"                => 2, 
    "titre"             => "benjamin griveaux", 
    "contenu"           => "il est passé où le benjamin ?", 
    "image"             => "assets/img/photo1.jpg", 
    "datePublication"   => "2020-03-03 00:00:00", 
    "categorie"         => "politique"
];

// ON VA UTILISER UN TABLEAU INDEXE DE TABLEAU ASSOCIATIFS
$tabLigne = [
    $tabAsso1,
    $tabAsso2,
];
*/

// POUR RECUPERER LES INFOS DE SQL
// ETAPE1: CONNECTER PHP A SQL
$pdo = new PDO("mysql:host=127.0.0.1;dbname=blog;charset=utf8;", "root", "");
// ETAPE2: LANCER UNE REQUETE SQL EN LECTURE
$requeteSQL =
<<<CODESQL

SELECT * FROM `article`
ORDER BY datePublication DESC

CODESQL;

// https://www.php.net/manual/fr/pdo.query.php
// PDOStatement EST UN CONTAINER QUI ENGLOBE LES RESULTATS DE LA REQUETE SQL
$pdoStatement = $pdo->query($requeteSQL);

// ETAPE3: JE RECUPERE MON TABLEAU DE RESULTATS
// https://www.php.net/manual/fr/pdostatement.fetchall.php
$tabLigne = $pdoStatement->fetchAll();

foreach($tabLigne as $tabAsso)
{
    $id         = $tabAsso["id"];
    $titre      = $tabAsso["titre"];
    $contenu    = $tabAsso["contenu"];
    $image      = $tabAsso["image"];
    // ... 

    echo
<<<CODEHTML

    <article>
        <h3>$titre</h3>
        <img src="$image" alt="photo1">
        <p>$contenu</p>
    </article>

CODEHTML;
}

// LES INFOS QUI NOUS INTERESSENT SONT DANS UNE TABLE SQL articles
// LA TABLE SQL A DES COLONNES titre, image, contenu, etc... 
// ET LES INFOS SONT GROUPEES DANS UNE MEME LIGNE

?>
        </section>

        <section>
            <h2>liste des articles EN HTML</h2>
            <div class="listeArticle">
                <article>
                    <img src="assets/img/photo1.jpg" alt="photo1">
                    <h3>titre article1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
                </article>
                <article>
                    <img src="assets/img/photo1.jpg" alt="photo1">
                    <h3>titre article2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
                </article>
                <article>
                    <img src="assets/img/photo1.jpg" alt="photo1">
                    <h3>titre article3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
                </article>
                <article>
                    <img src="assets/img/photo1.jpg" alt="photo1">
                    <h3>titre article1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
                </article>
                <article>
                    <img src="assets/img/photo1.jpg" alt="photo1">
                    <h3>titre article2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
                </article>
                <article>
                    <img src="assets/img/photo1.jpg" alt="photo1">
                    <h3>titre article3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
                </article>
            </div>
        </section>


        <section>
            <h2>news</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, amet incidunt inventore nemo vero culpa, beatae, architecto explicabo officia adipisci iste. Nobis, maiores ea! Ipsum ullam ut fugit accusantium ea!</p>
            <img src="assets/img/photo1.jpg" alt="photo1">
        </section>

