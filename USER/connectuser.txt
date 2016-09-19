# language: fr

Fonctionnalité: Un Utilisateur tape l'url.
                Une personne tape L'url erronée.
                Filtrage de "bloc".
                Recherche par date.
                Recherche par Titre.
                Je choisis par media audio.
                Je choisis un audio par son titre.
                Je choisis un audio par sa date.
                Je choisis par média Video.
                Je choisis une video par son titre.
                Je choisis une vidéo par sa date.
                Je choisis un média Image.
                Je choisis une image par son titre.
                Je choisis une image par sa date.
                Le visiteur veut se connecter.
                Le visiteur saisit ses identifiants.
                Le visiteur ressaisit ses ID.
                Le visiteur veut réinitialiser son mot de passe.
                Le visiteur entre 2 champs de réinitialisation.
                Aucun compte n'est associé à cette adresse mail.



Scénario:  Une personne tape URL 
	Etant donné que je tape l'url "http://localhost/mon-site"
	Et que je ne suis pas connecté
	Alors j'accède à la page Accueil
	Et je visualise les "blocs"                

Scénario: Une personne tape URL erronée
	Etant donné que je tape l'url "http://localhost/mon-site/taralapouete"
	Alors page 404 apparait

Scénario: Filtrage des "blocs"
	Etant donné que je ne suis pas connecté
	Et que je cherche un "bloc"
	Quand je clique sur le bouton filtrage		
	Alors apparaissent 3 boutons nommés "date", "titre" et "médias"

Scénario: recherche par date
	Etant donné que je fais une recherche par "date"
	Quand je tape "13-07-2016"
	Alors le bloc en date du "13-07-2016" apparait 
	Mais si pas de résultat
	Alors le message "aucun bloc crée à cette date" apparait

Scénario: recherche par Titre
	Etant donné que je fais une recherche par "titre"
	Quand je tape "mixité au travail"
	Alors les blocs avec titre "mixité au travail" apparaissent  
	Mais si pas de résultat
	Alors le message "aucun bloc avec ce titre" apparait

Scénario: Je choisis un média Audio 
	Etant donné que je cherche un audio
	Alors les blocs "audio" apparaissent
	Mais si pas de résultats
	Alors le message "aucun média audio trouvé" apparait

Scénario: Je choisis un audio par son titre
	Etant donné que je cherche un audio 
	Et que je filtre sur le titre "atelier mixité au travail"
	Quand valide ma recherche
	Alors  les blocs "audio" avec titre "atelier mixité au travail" apparaissent
	Mais si pas de résultats
	Alors le message "aucun média audio avec ce titre" apparait

Scénario: Je choisis un audio par sa date
	Etant donné que je cherche un audio 
	Et que je filtre sur la date "13-07-2016"
	Quand valide ma recherche
	Alors  les blocs "audio" avec date"13-07-2016" apparaissent
	Mais si pas de résultats
	Alors le message "aucun média audio avec ce titre" apparait	

Scénario: Je choisis un média Video 
	Etant donné que je cherche une video
	Alors les blocs "video" apparaissent
	Mais si pas de résultats
	Alors le message "aucun média video trouvé" apparait

Scénario: Je choisis une video par son titre
	Etant donné que je cherche un video
	Et que je filtre sur le titre "atelier mixité au travail"
	Quand valide ma recherche
	Alors  les blocs "video" avec "atelier mixité au travail" apparaissent
	Mais si pas de résultats
	Alors le message "aucun média video avec ce titre" apparait

Scénario: Je choisis une vidéo par sa date
	Etant donné que je cherche une video
	Et que je filtre sur la date "13-07-2016"
	Quand valide ma recherche
	Alors  les blocs "video" avec date"13-07-2016" apparaissent
	Mais si pas de résultats
	Alors le message "aucun média video avec ce titre" apparait

Scénario: Je choisis un média Image
	Etant donné que je cherche une image
	Alors les blocs "image" apparaissent
	Mais si pas de résultats
	Alors le message "aucun média image trouvé" apparait

Scénario: Je choisis une image par son titre
	Etant donné que je cherche une image
	Et que je filtre sur le titre "atelier mixité au travail"
	Quand valide ma recherche
	Alors  les blocs "image" avec "atelier mixité au travail" apparaissent
	Mais si pas de résultats
	Alors le message "aucun média image avec ce titre" apparait

Scénario: Je choisis une image par sa date
	Etant donné que je cherche une image
	Et que je filtre sur la date "13-07-2016"
	Quand valide ma recherche
	Alors  les blocs "image" avec date"13-07-2016" apparaissent
	Mais si pas de résultats
	Alors le message "aucun média image avec ce titre" apparait

Scénario:  Le visiteur veut se connecter
	Etant donné que le visiteur veut se connecter
	Quand je clique sur le bouton "se connecter"
	Alors une modal box apparait

Scénario: Le visiteur saisit ses identifiants 
	Etant donné que le visiteur se connecte
	Quand il saisit ses ID
	Et qu'ils sont ok 
	Alors il sera connecté en tant que user

Scénario: Le visiteur saisit ses identifiants 
	Etant donné que le visiteur se connecte
	Quand il saisit ses ID
	Et qu'ils sont ko 
	Alors le message d'erreur "votre pseudo ou mot de passe est incorrect" apparait

Scénario: Le visiteur ressaisit ses ID
	Etant donné que le message d'erreur "votre pseudo ou mot de passe est incorrect" apparait
	Quand il resaisit ses ID pour la 3e fois 	
	Alors le message "Votre compte est bloqué" apparait

Scénario: Le visiteur a perdu ses ID
	Etant donné que le visiteur a perdu ses ID
	Quand il clique sur "Mot de passe ou pseudo oublié"
	Alors un prompt "veuillez saisir votre email apparait"
	Quand le visiteur tape son adresse mail
	Et appuie sur valider
	Alors un email avec un lien de réinitialisation de mot de passe lui est envoyé

Scénario: Le visiteur veut réinitialiser son mot de passe
	Etant donné que le visiteur est sur sa boite mail
	Quand il clique sur le lien 
	Alors une fenetre avec champs de réinitialisation mot de passe s'ouvre
	Quand il change son mot de passe
	Et qu'il appuie sur valider
	Alors acces a page accueil en tant que user

Scénario: Le visiteur entre 2 champs de réinitialisation différents
	Etant donné que le visiteur entre 2 champs de réinitilaisation différents
	Alors message "les 2 champs ne sont pas identiques"
	Et retour à la fenetre avec champs de réinitialisation mot de passe

Scénario: Aucun compte n'est associé à cette adresse mail
	Etant donné que le visiteur entre un mail associé à aucun compte
	Alors message "Aucun compte n'est associé à cette adresse mail"

