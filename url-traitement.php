<?php
// BALISE OUVRANTE POUR CODER EN PHP

// ICI AVEC PHP, 
// ON VA POUVOIR RECEPTIONNER LES INFORMATIONS DU FORMULAIRE

// http://localhost:81/simplon/vitrine/url-traitement.php?nom=nom1023&email=mail1023%40mail.me

/*
ENVOYE PAR LE NAVIGATEUR A PARTIR DU CODE HTML DU FORMULAIRE
url-traitement.php          <form action="url-traitement.php">
?
nom=nom1023                       <input name="nom">
&
email=mail1023%40mail.me          <input name="email">

*/

// POUR POUVOIR RECUPERER CES INFOS DANS PHP
// PHP MET LES INFOS DE FORMULAIRES DANS UN TABLEAU ASSOCIATIF $_REQUEST

// JE VAIS CREER UNE VARIABLE POUR MEMORISER CHAQUE INFO
//  ?? EST L'OPERATEUR COALESCENT
// SI IL N'Y A DE VALEUR ALORS ON FOURNIT UNE VALEUR PAR DEFAUT
$nom = $_REQUEST["nom"] ?? "";        // <input name="nom">
$email = $_REQUEST["email"] ?? "";    // <input name="email">

echo "MERCI DE VOTRE INSCRIPTION AVEC $nom ET $email";

// JE VOUDRAIS STOCKER LES INSCRIPTIONS 
// SUR LE SERVEUR POUR POUVOIR AVOIR LA LISTE PLUS TARD
// https://www.php.net/manual/fr/function.file-put-contents.php
// ON VEUT GARDER DANS UN FICHIER CSV 
// (FACILEMENT UTILISABLE AVEC UN TABLEUR)
// Comma Separated Value
// user1,user1@mail.me
// user2,user2@mail.me
$ligne = "$nom,$email\n"; // \n permet d'aller à la ligne
file_put_contents("php/newsletter.csv", $ligne, FILE_APPEND);
// FILE_APPEND PERMET DE GARDER LE CONTENU D'AVANT ET D'AJOUTER UNE NOUVELLE LIGNE

// ENVOYER UN EMAIL AU WEBMASTER POUR L'INFORMER D'UNE NOUVELLE INSCRIPTION
// (SUR NOS SERVEUR EN LOCAL, ON NE PEUT ENVOYER DE MAIL...)
// https://www.php.net/manual/fr/function.mail.php
@mail("webmaster@monsite.fr", "nouvelle inscription newsletter", $ligne);
// SI PAS DE SERVEUR EMAIL
// Warning: mail(): Failed to connect to mailserver at "localhost" port 25, verify your "SMTP" and "smtp_port" setting in php.ini or use ini_set() in C:\xampp\htdocs\simplon\vitrine\url-traitement.php on line 45
// ON AJOUTE @ POUR NE PLUS AFFICHER DE MESSAGE D'ERREUR

// FACILITE DE PHP
// SI ON NE FERME PAS LA BALISE, PHP EST COOL
?>