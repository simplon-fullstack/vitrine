<?php

// CE FICHIER PHP VA RECEVOIR LES INFORMATIONS DU FORMULAIRE DE CONTACT

// ICI ON VA RECUPERER LE NOM FOURNI PAR LE VISITEUR
$nom = $_REQUEST["nom"];
// ICI ON VA RECUPERER L'EMAIL FOURNI PAR LE VISITEUR
$email = $_REQUEST["email"];
// ICI ON VA LE MESSAGE
$message = $_REQUEST["contact-message"];

// MESSSAGE 
echo "J'AI RECU $nom ET $email ET $message";

// JE VEUX ENREGISTRER CES INFORMATIONS DANS UN FICHIER
// php/contact.txt 
$ligne = "J'AI RECU $nom ET $email ET $message";
file_put_contents("php/contact.txt", $ligne, FILE_APPEND);

