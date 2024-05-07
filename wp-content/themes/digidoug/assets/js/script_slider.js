
    // Récupérer toutes les images de projet
    var imgProjets = document.querySelectorAll('.img-projet');

    // Ajouter un gestionnaire d'événement de clic à chaque image de projet
    imgProjets.forEach(function(imgProjet) {
        imgProjet.addEventListener('click', function(event) {
            event.stopPropagation(); // Empêcher la propagation du clic à d'autres éléments
            var nomProjet = this.getAttribute('data-nom-projet'); // Récupérer le nom du projet
            var themeProjet = this.getAttribute('data-theme-projet'); // Récupérer le thème du projet
            var descriptionProjet = this.getAttribute('data-description-projet'); // Récupérer la description du projet
            var lienProjet = this.getAttribute('data-lien-projet'); // Récupérer le lien du projet 

            // Utilisez les variables nomProjet, themeProjet et descriptionProjet selon vos besoins
            console.log('Nom du projet:', nomProjet);
            console.log('Thème du projet:', themeProjet);
            console.log('Description du projet:', descriptionProjet);
            console.log('lien du projet:', lienProjet);
            console.log('test');

            // Vous pouvez les utiliser pour afficher ces informations dans la fenêtre modale ou faire autre chose avec elles
            // Par exemple, vous pouvez utiliser les lignes suivantes pour afficher les informations dans la fenêtre modale
            var modalContent = document.querySelector('.modal-content');
            modalContent.innerHTML = '<h3>' + nomProjet + '</h3>' +
                                     '<p><strong>Thème:</strong> ' + themeProjet + '</p>' +
                                     '<p><strong>Description:</strong> ' + descriptionProjet + '</p>'+
                                     '<p><strong> <a href="' + lienProjet + '" target="_blank" rel="noopener noreferrer">Lien GitHub</a></strong></p>';

            var modal = document.querySelector('.modal');
            modal.style.right = '0'; // Faire apparaître la fenêtre modale de la droite vers la gauche

            // Ajouter un gestionnaire d'événement de clic au document pour fermer la fenêtre modale lorsque l'utilisateur clique n'importe où sur l'écran
            document.addEventListener('click', function closeModal(event) {
                if (event.target === modal || event.target !== modal) {
                    modal.style.right = '-33%'; // Cacher la fenêtre modale en la faisant retourner vers la droite
                    document.removeEventListener('click', closeModal); // Retirer le gestionnaire d'événement après la fermeture de la fenêtre modale
                }
            });
        });
    });

	


