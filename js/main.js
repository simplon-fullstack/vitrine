/* ICI ON ECRIT DU CODE JS */
/*
QUAND ON CLIQUE SUR UNE PHOTO MINIATURE
ON VEUT QUE L'IMAGE EN GRAND CHANGE POUR LA PHOTO CLIQUEE

ETAPE1: IL FAUT SELECTIONNER TOUTES LES PHOTOS MINIATURES
ETAPE2: IL FAUT AJOUTER UN EVENT LISTENER SUR CHAQUE MINIATURE
*/
/* objet.methode(param1, param2) */        
var listePhoto = document.querySelectorAll(".container img");
listePhoto.forEach((image) => {
    // pour chaque image
    image.addEventListener("click", function () {
        // IL FAUT SELECTIONNER LA PHOTO EN GRAND
        var photoGrand = document.querySelector(".grande-image img");
        // CHANGER L'ATTRIBUT src POUR CHANGER L'IMAGE AFFICHEE
        // this EST UNE VARIABLE QUI CONTIENT LA BALISE SUR LAQUELLE LE VISITEUR A CLIQUE
        photoGrand.src = this.src;
        // DEBUG
        console.log(this);

        // IL FAUT AFFICHER LA LIGHTBOX
        var lightBox = document.querySelector(".grande-image");
        // IL FAUT CHANGER LE display A block
        // lightBox.style.display = 'block';
        // IL FAUT AJOUTER LA CLASSE montrer A LA BALISE
        lightBox.classList.add('montrer');
    });
});

// IL FAUT POUVOIR CACHER LA LIGHTBOX SI ON CLIQUE DESSUS
var lightBox = document.querySelector(".grande-image");
// PEUT-ETRE QUE LA BALISE N'EXISTE PAS
if (lightBox != null)
{
    // LA BALISE EXISTE
    lightBox.addEventListener('click', function() {
        // IL FAUT CACHER LA LIGHTBOX
        lightBox.classList.remove('montrer');
    });
}
else
{
    // LA BALISE N'EXISTE PAS
    // ON NE FAIT RIEN
}


// ON VA AJOUTER DU CODE JS
// QUI VA ENVOYER LES INFOS DU FORMULAIRE EN AJAX
// AVANTAGE: ON VA RESTER SUR LA MEME PAGE
// JE VEUX SELECTION LES BALISES form QUI ONT LA CLASSE ajax
var listeForm = document.querySelectorAll("form.ajax");
listeForm.forEach(function(element){
    // JE VAIS RAJOUTER UN EVENT LISTENER SUR L'EVENEMENT submit
    // DU FORMULAIRE
    element.addEventListener('submit', function(event){
        // CETTE FONCTION SERA APPELEE QUAND LE VISITEUR VA CLIQUER SUR LE BOUTON "ENVOYER"
        // JE VAIS BLOQUER LE FONCTIONNEMENT NORMAL DU FORMULAIRE
        event.preventDefault();

        // JE VAIS AJOUTER MON ENVOI DE FORMULAIRE EN AJAX
        // https://developer.mozilla.org/fr/docs/Web/API/Fetch_API/Using_Fetch
        // ON VA AJOUTER LES INFORMATIONS DU FORMULAIRE
        // this EST UNE VARIABLE SPECIALE DE JS QUI CONTIENT LA BALISE 
        // SUR LEQUEL L'EVENEMENT A ETE DECLENCHE
        console.log(this);
        // DANS LA VARIABLE formData, 
        // ON AURA TOUTES LES INFOS REMPLIES PAR LE VISITEUR
        var formData = new FormData(this);

        // POSTE 1
        fetch("url-traitement.php", {
            method: "POST",
            body: formData      // LES INFOS DU FORMULAIRE SONT ENVOYEES AUSSI
        })
        // IL FAUT RECUPERER LE MESSAGE DE CONFIRMATION
        // ET L'AFFICHER
        // POSTE 2
        .then((response) => {
            // JE N'AI PAS LE MESSAGE DU SERVEUR
            console.log(response);
            // POUR AVOIR LE MESSAGE DU SERVEUR
            return response.text(); // PRODUIT LA VALEUR QUI SERA DANS texteServeur
        })
        // POSTE 3
        .then((texteServeur) => {
            // CA Y'EST J'AI LE MESSAGE
            console.log(texteServeur);
            // JE VEUX INSERER LE MESSAGE SOUS LE BOUTON DANS LE FORMULAIRE
            var baliseConfirmation = document.querySelector("form .confirmation");
            baliseConfirmation.innerHTML = texteServeur;
        } );

        ;

    })
});

