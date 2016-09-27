# language: fr

Fonctionnalité: Scénarion pour les manip possible de l'admin.

    Scénario: Admin fait MAJ de son password
        Étant donné que je suis connecté en tant que "admin"
        Quand je change mon password
        Alors je dois voir le message Votre mail a bien été modifié

    Scénario: Admin fait MAJ de son mail
        Étant donné que je suis connecté en tant que "admin"
        Quand je change mon mail
        Alors je dois voir le message Votre mail a bien été modifié