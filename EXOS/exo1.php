<?php

$tableau = [ 5, 13, -12, 7, 3 ];
$plusPetit = $tableau[0];   // ON PREND LE PREMIER ELEMENT COMME PLUS PETIT AU DEPART
// PARCOURIR LE TABLEAU
// ET POUR CHAQUE ELEMENT COMPARER AVEC LE PLUS PETIT
foreach($tableau as $element)
{
    if ($element < $plusPetit)
    {
        $plusPetit = $element;
    }
}

echo "<h3>LE PLUS PETIT EST $plusPetit</h3>";

// LE BUT: TROUVER LE PLUS PETIT NOMBRE DANS LE TABLEAU
/*
// EN JS
var tableau = [ 5, 13, 7 ];
var plusPetit = tableau[0];     // ON PREND LE PREMIER ELEMENT AU DEPART
// ON PREND CHAQUE NOMBRE ET ON LE COMPARE AU PLUS PETIT
// => ON PREND CHAQUE ELEMENT DANS LE TABLEAU
// => BOUCLE

for(indice=0; indice<tableau.length; indice++)
{
    element = tableau[indice];
    // je compare chaque élément au plus petit
    // => condition
    if (element < plusPetit)
    {
        // il devient le plus petit
        plusPetit = element;
    }
}
*/

