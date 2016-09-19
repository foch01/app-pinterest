# language: fr

Fonctionnalité: "Sup_user" accède à ajout "Admin"
                "Sup_user" ajoute "Admin"
                "Sup_user" quitte la fenêtre "ajouter un admin"
                "Sup_user" ajoute un "Admin" non valide
   
   
        Scénario: "Sup_user" accède à ajout "Admin"
        Étant donné que je suis connecté en tant que "Sup_user"
        Quand je click sur "ajouter un admin"
        Alors je dois voir une fenêtre "ajouter un admin"
        
        Scénario:  "Sup_user" ajoute "Admin"
        Étant donné que je suis connecté en tant que "Sup_user"
        Quand je rentre les informations dans la fenêtre "ajouter un admin"
        Et je confirme un "ajouter un admin"
        Alors je dois avoir un retour à la page accueil
        Et le message "Votre ajout a bien été pris en compte" est affiché

        Scénario:  "Sup_user" quitte la fenêtre "ajouter un admin"
        Étant donné que je suis connecté en tant que "Sup_user"
        Quand je quitte la fenêtre "ajouter un admin"
        Alors je dois voir une fenêtre de confirmation

        Scénario: "Sup_user" ajoute un "Admin" non valide
        Étant donné que je suis connecté en tant que "Sup_user"
        Quand je rentre les informations dans la fenêtre "ajouter un admin"
        Et Le pseudo est déjà dans la base donnée
        Et l'email est invalide
        Alors je dois voir le message "Vos informations ne sont pas disponibles"