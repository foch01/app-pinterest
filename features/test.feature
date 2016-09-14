
# language: fr

Feature : Add block

Scenario :	"Admin" créer un bloc valide
	Étant donné que je suis connecté en tant que "Admin"
	Quand je rentre les informations dans la fenêtre de bloc
	Alors je dois voir un retour à la page accueil avec le nouveau bloc
	Et le message "Votre ajout à bien été pris en compte" est affiché