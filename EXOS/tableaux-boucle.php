<?php

echo "<h2>TABLEAU ORDONNE</h2>";

// AVEC UN TABLEAU ORDONNE
$tableauNombre = [ 23, 36, 25 ];

// SIMPLE ON PEUT RECUPERER LES INDICES ET LES VALEURS
foreach($tableauNombre as $index => $element)
{
    echo "($index,$element)";
}

echo "<h2>TABLEAU ORDONNE SANS LES INDICES</h2>";
foreach($tableauNombre as $element)
{
    echo "($element)";
}

// AVEC UN TABLEAU ASSOCIATIF
$tabAssociatif = [ 
    "cle1" => "valeur1", 
    "cle2" => "valeur2", 
    "cle3" => "valeur3"
];

echo "<h2>TABLEAU ASSOCIATIF </h2>";

// ON PEUT UTILISER foreach
foreach($tabAssociatif as $cle => $element)
{
    echo "($cle,$element)";
}

echo "<h2>TABLEAU ASSOCIATIF SANS LES CLES</h2>";

// ON PEUT UTILISER foreach
foreach($tabAssociatif as $element)
{
    echo "($element)";
}

// TABLEAU ORDONNE
$tableauCarteIdentite = [ "nom", "prénom", "date naissance" ];
$nom = $tableauCarteIdentite[0];
$prenom = $tableauCarteIdentite[1];
$dateNaissance = $tableauCarteIdentite[2];

// TABLEAU ASSOCIATIF
$tableauAssociatifIdentite = [
    "nom"           => "DUPONT",
    "prenom"        => "Jean",
    "dateNaissance" => "01/01/2001"
];

$nom = $tableauAssociatifIdentite["nom"];
$prenom = $tableauAssociatifIdentite["prenom"];
$dateNaissance = $tableauAssociatifIdentite["dateNaissance"];


// ECRITURE PLUS SIMPLE
// SI ON NE S'INTERESSE PAS AUX INDICES OU AUX CLES
// MAIS SEULEMENT AUX VALEURS


// ON PEUT UTILISER foreach POUR RECUPERER LES ELEMENTS
foreach($tabAssociatif as $element)
{
    echo "($element)";
}


echo "<h2>BOUCLE FOR</h2>";
// POUR LES TABLEAUX ORDONNES
// for
$tableauOrdonne = [ "a", "b", "c" ];
for($indice=0; $indice < count($tableauOrdonne); $indice++)
{
    $element = $tableauOrdonne[$indice];
    echo "($indice,$element)";
}


echo "<h2>BOUCLE WHILE</h2>";
// while
$indice = 0;
while($indice < count($tableauOrdonne))
{
    $element = $tableauOrdonne[$indice];
    echo "($indice,$element)";

    // NE PAS OUBLIER D'INCREMENTER
    $indice++;
}


