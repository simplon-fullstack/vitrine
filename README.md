# vitrine

PROJET: site vitrine

ON VEUT CREER UN SITE DE PLUSIEURS PAGES

    Accueil     index.html
    Galerie     galerie.html
    Contact     contact.html

ON VA AJOUTER UN MENU POUR POUVOIR NAVIGUER ENTRE LES PAGES


## ATTENTION AU JS

    SI ON CHARGE UN FICHIER JS POUR TOUTES LES PAGES
    LE CODE JS DOIT VERIFIER QUE LES BALISES HTML SONT BIEN PRESENTES


## PHP

![serveur web lamp](https://workodin.com/assets/media/architecture-lamp.svg)


1994 CREATION

UTILITE POUR NOUS

    TRAITEMENT DE FORMULAIRE
    => PHP COMME LANGAGE DE PROGRAMMATION
    => VARIABLES, VALEURS, BOUCLES, CONDITIONS, FONCTIONS, etc...

    OUTIL POUR ASSEMBLER DES BOUTS DE CODE HTML 
    POUR CREER UNE PAGE HTML COMPLETE
    => MOTEUR DE TEMPLATES

### COMMENT ON PASSE DE HTML A PHP ?

CHANGER LE SUFFIXE .html EN .php

## DECOUPER SON CODE EN TRANCHES DE PLUSIEURS PHP

    PERDANT: 
    PLUS DE FICHIERS ET ON A DES BOUTS DE HTML
    => PLUS DIFFICILE A COMPRENDRE

    GAGNANT: 
    CENTRALISER LE CODE ET ON PEUT MODIFIER DANS UN SEUL FICHIER
    => ET ENSUITE PHP RECREE LE CODE HTML SUR TOUTES LES PAGES

    POUR TRAVAILLER EN EQUIPE:
    CHACUN PEUT SE CONCENTRER SUR SON FICHIER 
    ET NE PAS ETRE EN CONFLIT AVEC LES AUTRES DEVELOPPEURS


## DOCUMENTATION OFFICIELLE PHP

https://www.php.net/manual/fr/


https://www.php.net/manual/fr/language.variables.basics.php


    en PHP, surtout du camelCase, mais aussi du snake_case
    mais - est utilisé pour la soustraction 
    donc on ne peut pas utiliser kebab-case


## OPERATEUR D'AFFECTATION =

    UNE VARIABLE SERT A MEMORISER UNE VALEUR (INFORMATION)
    POUR POUVOIR L'UTILISER PLUS TARD

```php
<?php
$maVariable = "le texte à mémoriser dans la variable";
?>
```

    PROCESSEUR      
    => TRES TRES RAPIDE GHz

    MEMOIRE VIVE
    => AUSSI RAPIDE QUE LE PROCESSEUR
    => MAIS ON PERD TOUT SI ON ETEINT L'ORDI
    => POUR LE DEVELOPPEUR, ON PEUT UTILISER LA MEMOIRE VIVE POUR STOCKER DE L'INFORMATION
    => UNE VARIABLE EST UNE PARCELLE DE MEMOIRE VIVE QUE VOUS RESERVEZ POUR VOTRE PROGRAMME

    DISQUE DUR      
    => STOCKE LES INFORMATIONS A GARDER MEME SI ON ETEINT L'ORDINATEUR
    => TRES LENT COMPARE AU PROCESSEUR


### VALEUR: TEXTES (string)

```php
<?php

$texte1        = "un texte";           // PREFERENCE EN PHP
$texte2        = 'un autre texte';
$codeBalise    = '<img src="images/photo1.jpg">';

$prenom        = "beyonce";
$nom           = "knowles";

?>
```


## OPERATEUR DE CONCATENATION

* MANIERE PRATIQUE AVEC ""

```php
<?php

// CE NE MARCHE QUE AVEC ""
$texte = "le nom complet est $prenom $nom";   // "beyonce knowles"

$texte2 = '$prenom $nom';                     // "$prenom $nom"

?>
```


* OPERATEUR DE CONCATENATION .

```php
<?php

// ON PEUT ASSEMBLER PLUSIEURS TEXTES ENSEMBLE AVEC .
$texte = "le nom complet est " . $prenom . " " . $nom;

?>
```

## VALEURS: BOOLEEN

PLUSIEURS MANIERES POUR ECRIRE

```php
<?php

$vrai = true;
$vrai = TRUE;

$faux = false;
$faux = FALSE;

?>
```

ATTENTION: PAS DE GUILLEMETS

## OPERATEUR DE COMPARAISON

* TEST POUR EGALITE

ATTENTION AUX = ET == ET ===

```php
<?php

// =    AFFECTATION
// ==   COMPARAISON ENTRE 2 VALEURS
// ===  COMPARAISON ENTRE 2 VALEURS ET LEURS TYPES

$resultat = ("texte1" == "texte2");
// LE RESULTAT DE LA COMPARAISON EST UN BOOLEEN

$resultat = ("abc" == "ABC");   // FAUX
$resultat = (10 == 10);     // VRAI

$nombre1 = 4;
$nombre2 = 6;

$resultat = ($nombre1 + $nombre2 == 10);    // VRAI

?>
```

* TEST POUR DIFFERENCE !=

```php
<?php

$resultat = ($nombre1 + $nombre2 != 10);    // FAUX

?>
```

## VALEURS: NOMBRES

```php
<?php

$nombre1 = 123;         // ENTIER
$decimal = 123.45;      // DECIMAL

?>
```


## OPERATIONS MATHEMATIQUES

    +   ADDITION
    -   SOUSTRACTION
    *   MULTIPLICATION
    /   DIVISION
    %   MODULO  (RESTE DE LA DIVISION)


```php
<?php

$resultat = 100 / 3;    //  33.33333
$reste    = 100 % 3;    //  1

$resultat = 10 / 4;     // 2.5
$reste    = 10 % 4;     // 2

$tva = 20;
$prixHT = 100;

$prixTTC = $prixHT * (1 + $tva / 100);
$prixTTC = $prixHT + $prixHT * $tva / 100;

$produit1 = 2;
$quantite1 = 10;

$produit2 = 3;
$quantite2 = 15;

$prixPanier = ($produit1 * $quantite1) + ($produit2 * $quantite2);

?>
```




## OPERATEUR DE COMPARAISON SUR LES NOMBRES

    ==      EGALITE
    <=      INFERIEUR OU EGAL
    >=      SUPERIEUR OU EGAL
    <       INFERIEUR STRICT
    >       SUPERIEUR STRICT

```php
<?php

$resultat = ($nombre1 + $nombre2 > 100);    // FAUX

?>
```



## EXERCICE POUR CET APRES-MIDI


    CREER UN SITE VITRINE DE QUELQUES PAGES EN PHP
    Accueil
    Galerie
    Contact

    * DECOUPER VOTRE CODE PHP EN PLUSIEURS FICHIERS 
    * ET RECONSTRUIRE AVEC PHP LES PAGES HTML ENTIERES



## VARIABLES ET VALEURS

EN PHP, UNE VARIABLE COMMENCE PAR $

```php
<?php

$unTexte = 'le texte à mémoriser';

?>
```

    VALEURS
    * TEXTE (string)
    * NOMBRE (entier et décimaux)
    * BOOLEEN (vrai ou faux)
    * TABLEAUX

## OPERATEURS POUR MANIPULER CES VALEURS

    * OPERATEURS DE CONCATENATION DE TEXTES
    * OPERATEURS DE CALCUL SUR LES NOMBRES 
    * OPERATEURS DE COMPARAISON (SUR LES TEXTES ET LES NOMBRES)

## VALEURS: TABLEAUX ORDONNES (array)

https://www.php.net/manual/fr/language.types.array.php

```php
<?php

// DANS UNE VARIABLE JE STOCKE UNE SEULE VALEUR
$unTexte = "UNE VALEUR";

// ON A BESOIN DE POUVOIR GROUPER PLUSIEURS ENSEMBLE
// DANS UNE SEULE VARIABLE
$tableauMot = [ "mot1", "mot2", "mot3" ];

// TABLEAU ORDONNE
// LES ELEMENTS DANS UN CERTAIN ORDRE
// ON A LE PREMIER ELEMENT, LE 2E ELEMENT, etc...
// CHAQUE ELEMENT A UN INDICE QUI DONNE SON EMPLACEMENT
// ATTENTION: ON COMMENCE A ZERO

// SI JE VEUX ACCEDER A UNE VALEUR DANS UN TABLEAU ORDONNE 
// JE VAIS UTILISER SON INDICE

$premierMot = $tableauMot[0];       // "mot1"
$troisiemeMot = $tableauMot[2];     // "mot3"

// POUR COMPTER LE NOMBRE D'ELEMENTS DANS UN TABLEAU
// EN PHP, ON UTILISE UNE FONCTION count
// https://www.php.net/manual/fr/function.count.php
$nombreMot = count($tableauMot);

// EN JS
// var tableauMot = [ "mot1", "mot2", "mot3" ];
// var nombreMot  = tableauMot.length;

// SI JE VEUX CHANGER LA VALEUR D'UN ELEMENT
// SI JE VEUX REMPLACER "mot2" par "jeudi"
$tableauMot[1] = "jeudi";

// POUR AJOUTER UNE NOUVELLE VALEUR 
// A LA FIN DU TABLEAU
$tableauMot[] = "mot4";

?>
```



## TABLEAUX ASSOCIATIFS (array)

```php
<?php

// ON STOCKE LES INFORMATIONS PAR PAIRE CLE => VALEUR
$tableauAssociatif = [ 
    "cle1" => "mot1", 
    "cle2" => "mot2", 
    "cle3" => "mot3" 
    ];

// SI JE VEUX ACCEDER A UN ELEMENT DANS UN TABLEAU ASSOCIATIF
// JE VAIS UTILISER SA CLE
// ATTENTION: LA CLE DOIT ETRE UNIQUE ET C'EST UN TEXTE
$mot2 = $tableauAssociatif["cle2"];

// SI JE VEUX CHANGER LA VALEUR D'UN ELEMENT
// JE VAIS AUSSI UTILISER SA CLE
// SI JE VEUX CHANGER "mot3" EN "vendredi"
$tableauAssociatif["cle3"] = "vendredi";

// EN JS
// LES TABLEAUX SONT SEULEMENT ORDONNES AVEC DES INDICES
// var tableau = [ 'mot1', 'mot2', 'mot3' ];
// var element1 = tableau[0];
/*
 var objet = { 
    propriete1 : 'valeur1', 
    propriete2 : 'valeur2',
    propriete3 : 'valeur3' 
    };

*/

?>
```



## DIFFERENCE ENTRE GET ET POST

    AVEC GET, LES INFOS DE FORMULAIRE SONT ENVOYEES DANS L'URL

    AVEC POST, LES INFOS DE FORMULAIRE NE SONT ENVOYEES DANS L'URL
    (pour les voir dans l'inspecteur du navigateur, il faut chercher plus loin...)
    (Avec google chrome, dans l'onglet Réseau > Headers > et scroller à la fin...)

    AVEC GET ET POST, LE NAVIGATEUR CHANGE DE PAGE POUR ALLER SUR url-traitement.php
    => ON VEUT PAS CA !!!

    LA TAILLE D'UNE REQUETE GET EST LIMITEE A QUELQUES Ko (AUTOUR DE 4Ko)
    => ON NE PEUT PAS ENVOYER BEAUCOUP D'INFOS

    LA TAILLE D'UNE REQUETE POST EST LIMITEE A PLUSIEURS Go
    => A UTILISER POUR UPLOADER DES VIDEOS OU DES PHOTOS

    ATTENTION: LES INFOS EN GET SONT VISIBLES DANS L'URL
    => NE JAMAIS UTILISER GET POUR DES INFOS CONFIDENTIELLES
    => BIEN EFFACER L'HISTORIQUE DU NAVIGATEUR QUI GARDE LES REQUETES GET

## AJAX : POUR NE PAS CHANGER DE PAGE

    ON VA DEVOIR UTILISER JAVASCRIPT POUR ENVOYER LES FORMULAIRES
    ...
    AJAX A DEMARRE L'ERE WEB2.0
    LES WEBAPPS (WEB APPLICATIONS) REPOSENT SUR AJAX

    => AJAX EST DEVENU UN OUTIL TRES IMPORTANT DANS L'INTERNET ACTUEL
    AJAX SE RAJOUTE EN PLUS DE GET ET POST POUR COMMUNIQUER ENTRE LE NAVIGATEUR ET LE SERVEUR WEB
    Asynchronous
    Javascript
    And
    XML

    XML ETAIT A LA MODE AU DEBUT (LANGAGES A BALISES)
    DEPUIS QUE JAVASCRIPT EST DEVENU TRES POPULAIRE
    ON UTILISE JSON A LA PLACE DE XML

    JavaScript
    Object
    Notation

    A SUIVRE...

## PROTECTION DU DOSSIER CONFIDENTIEL AVEC .htaccess

    AVEC APACHE, ON PEUT BLOQUER L'ACCES A UN DOSSIER
    EN AJOUTANT UN FICHIER .htaccess DANS CE DOSSIER
    ET QUI CONTIENT LA LIGNE Require all denied


    Require all Denied
    # CETTE LIGNE PERMET DE DEMANDER A APACHE
    # DE BLOQUER L'ACCES AUX NAVIGATEURS POUR LE DOSSIER ACTUEL
    # https://httpd.apache.org/docs/current/fr/howto/access.html
    # => Accès interdit!



## EXERCICE 

    ON VEUT AJOUTER LE CODE POUR TRAITER LE FORMULAIRE DE CONTACT
    ET ON VA STOCKER LES INFOS nom, email, message DANS UN FICHIER php/contact.txt

    SOUS LA FORME DE BLOCS

    -----
    nom: visiteur1
    email: visiteur1@mail.me

    message laissé par le visiteur1

    -----
    nom: visiteur2
    email: visiteur2@mail.me

    message laissé par le visiteur2






























## STRUCTURE DE CONTROLE: CONDITION

## STRUCTURE DE CONTROLE: BOUCLES







