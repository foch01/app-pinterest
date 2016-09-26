# language: fr

Fonctionnalité:
	Je teste mon code.

Scénario: "Sup_user" ajoute un "Admin" non valide
Étant donné que je suis connecté en tant que "Sup_user"
Quand je rentre les informations dans la fenêtre "ajouter un admin"
Et Le pseudo est déjà dans la base donnée
Et l'email est déjà dans la base donnée
Et que je créé mon utilisateur
Alors je dois voir le message "Cet utilisateur est déjà existant"