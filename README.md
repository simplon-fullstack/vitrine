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
$codeBalise    = '<img src="images/phot1.jpg">';

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


A SUIVRE...

## STRUCTURE DE CONTROLE: CONDITION

## STRUCTURE DE CONTROLE: BOUCLES







