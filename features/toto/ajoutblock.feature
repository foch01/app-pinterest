Feature: Gestion d'un administrateur lorsqu'il rajoute un bloc

Scenario : "Admin" a le droit de rajouter un nouveau bloc
	Étant donné que je suis connecté en tant que "Admin"
	Quand je click sur ajouter un nouveau bloc
	Alors je dois voir une fenêtre "ajouter un bloc"


Scenario :	"Admin" créer un bloc valide
	Étant donné que je suis connecté en tant que "Admin"
	Quand je rentre les informations dans la fenêtre de bloc
	Alors je dois voir un retour à la page accueil avec le nouveau bloc
	AND le message "Votre ajout à bien été pris en compte" est affiché

Scenario :	"Admin" quitte la fenêtre "ajouter un bloc"
	Étant donné que je suis connecté en tant que "Admin"
	Quand je quitte la fenêtre "ajouter un bloc"
	Alors je dois voir une fenêtre de confirmation


Scenario :	"Admin" supprime un bloc existant
	Étant donné que je suis connecté en tant que "Admin"
	Quand je tente de supprimer un bloc
	AND le bloc est encore existant
	Alors je dois voir une fenêtre de confirmation

Scenario :	"Admin" supprime un bloc inexistant
	Étant donné que je suis connecté en tant que "Admin"
	Quand je tente de supprimer un bloc
	AND le bloc est inexistant
	Alors le message "Ce bloc n'existe plus" est affiché

Scenario :	"Admin" modifie un bloc inexistant
	Étant donné que je suis connecté en tant que "Admin"
	Quand je tente de modifié un bloc
	AND le bloc est inexistant
	Alors le message "Ce bloc n'existe plus, voulez vous le recréer" est affiché

Scenario :	"Admin" modifie un bloc existant
	Étant donné que je suis connecté en tant que "Admin"
	Quand je tente de modifier un bloc
	AND je rentre les nouvelles informations dans la fenêtre de bloc
	Alors je dois voir un retour à la page accueil avec le bloc modifié
	AND le message "Votre modification à bien été prise en compte" est affiché
