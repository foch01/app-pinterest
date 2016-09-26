# language: fr

Fonctionnalité: "Sup_user" accède à ajout "Admin".
                "Sup_user" ajoute un "Admin" non valide

Scénario: "Sup_user" accède à ajout "Admin"
	Étant donné que je suis connecté en tant que "Sup_user"
	Quand je click sur ajouter un "Admin"
	Alors je dois voir une fenêtre "ajouter un admin"

Scénario: "Sup_user" ajoute un "Admin" non valide
    Étant donné que je suis connecté en tant que "Sup_user"
    Quand je rentre les informations dans la fenêtre "ajouter un admin"
    Et Le pseudo est déjà dans la base donnée
    Et l'email est déjà dans la base donnée
    Et que je créé mon utilisateur
    Alors je dois voir le message "Cet utilisateur est déjà existant"