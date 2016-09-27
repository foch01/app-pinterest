# language: fr

Fonctionnalité: Session d'ajout d'admin.

Scénario: "Sup_user" accède à ajout "Admin"
	Étant donné que je suis connecté en tant que "Sup_user"
	Alors je dois pouvoir accéder à la partie ajout admin
    
Scénario:  "Sup_user" ajoute "Admin"
	Étant donné que je suis connecté en tant que "Sup_user"
    Quand je rentre les informations dans la fenêtre "ajouter un admin"
    Et que je créé mon admin
    Alors le message "Votre ajout a bien été pris en compte" s'affiche

Scénario: "Sup_user" ajoute un "Admin" non valide
    Étant donné que je suis connecté en tant que "Sup_user"
    Quand je rentre les informations dans la fenêtre "ajouter un admin"
    Et Le pseudo est déjà dans la base donnée
    Et l'email est déjà dans la base donnée
    Et que je créé mon admin
    Alors je dois voir le message "Cet utilisateur est déjà existant"