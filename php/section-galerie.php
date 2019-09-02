        <section>
            <h3>galerie</h3>
            <div class="container">
<?php
// EXERCICE: RECREER LE CODE HTML DES IMAGES AVEC PHP
// TABLEAU
/*
$tableauImage = [ 
    "images/photo1.jpg", 
    "images/photo2.jpg", 
    "images/photo3.jpg", 
    "images/photo4.jpg", 
    "images/photo5.jpg",    // facilité en php: on peut mettre une virgule
];
*/
// https://www.php.net/manual/fr/function.glob.php
// LA FONCTION glob CONSTRUIT LE TABLEAU DES FICHIERS
// QUI SE TROUVENT DANS LE DOSSIER images/
$tableauImage = glob("images/*.jpg");
// BOUCLE
foreach($tableauImage as $image)
{
    // HEREDOC AVEC LES 3 <<<
    echo 
<<<BALISEHTML
    <img src="$image" alt="$image">
BALISEHTML;
}

?>
<!--
                <img src="images/photo1.jpg" alt="images/photo1.jpg">
                <img src="images/photo2.jpg" alt="images/photo2.jpg">
                <img src="images/photo3.jpg" alt="images/photo3.jpg">
                <img src="images/photo4.jpg" alt="images/photo4.jpg">
-->                        
            </div>
            <div class="grande-image">
                    <img src="images/photo1.jpg" alt="photo1">
            </div>
        </section>
        <section class="section2">
            <h3>Description de la Galerie</h3>
        </section>
