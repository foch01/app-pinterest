# language: fr

Fonctionnalité: Accéder à la fenêtre d'ajout d'un bloc pour l'admin.
                Rajouter un bloc par l'admin.
                "Admin" quitte la fenêtre "ajouter un bloc".
       
        Scénario: "Admin" a le droit de rajouter un nouveau bloc
            Étant donné que je suis connecté en tant que "Admin"
            Quand je click sur "ajouter un bloc"
            Alors je dois voir une fenêtre "ajouter un bloc"

        Scénario: "Admin" ajoute un bloc
            Étant donné que je suis connecté en tant que "Admin"
            Quand je rentre les informations dans "ajouter un bloc"
            Alors je dois voir un retour à la page accueil bloc_plus_un
            Et le message "Votre ajout à bien été pris en compte" s'affiche
        
        Scénario: "Admin" quitte la fenêtre "ajouter un bloc"
            Étant donné que je suis connecté en tant que "Admin"
            Quand je quitte la fenêtre "ajouter un bloc"
            Alors je dois voir une fenêtre de confirmation
        
        Scénario: "Admin" supprime un bloc existant
            Étant donné que je suis connecté en tant que "Admin"
            Quand je supprime un "bloc"
            Et le "bloc" est encore existant
            Alors je dois voir une fenêtre de confirmation
        
        
        Scénario: "Admin" supprime un bloc inexistant
            Étant donné que je suis connecté en tant que "Admin"
            Quand je supprime un bloc
            Et le "bloc" est inexistant
            Alors le message "Ce bloc n'existe plus" s'affiche

        Scénario: "Admin" modifie un bloc inexistant
            Étant donné que je suis connecté en tant que "Admin"
            Quand je modifie un bloc
            Et le bloc est inexistant
            Alors le message "Ce bloc n'existe plus, voulez vous le recréer" s'affiche