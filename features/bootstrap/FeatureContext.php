    <?php
    use Behat\Behat\Context\Context;
    use Behat\Behat\Context\SnippetAcceptingContext;
    use Behat\Gherkin\Node\PyStringNode;
    use Behat\Gherkin\Node\TableNode;
    use Behat\Behat\Tester\Exception\PendingException;
    use Entity\User;
    /**
    * Defines application features from the specific context.
    */
    class FeatureContext implements Context, SnippetAcceptingContext
    {
    /**
    * Initializes context.
    *
    * Every scenario gets its own context instance.
    * You can also pass arbitrary arguments to the
    * context constructor through behat.yml.
    */
    public function __construct()
    {
    //
    }

    /**
    * @When je rentre les informations dans la fenêtre :arg1
    */
    public function jeRentreLesInformationsDansLaFenetre($arg1)
    {
    throw new PendingException();
    }
    /**
    * @When je confirme un :arg1
    */
    public function jeConfirmeUn($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Then le message :arg1 est affiché
    */
    public function leMessageEstAffiche($arg1)
    {
    throw new PendingException();
    }
    /**
    * @When Le pseudo est déjà dans la base donnée
    */
    public function lePseudoEstDejaDansLaBaseDonnee()
    {
    throw new PendingException();
    }
    /**
    * @When l'email est invalide
    */
    public function lEmailEstInvalide()
    {
    throw new PendingException();
    }
    /**
    * @Then je dois voir le message :arg1
    */
    public function jeDoisVoirLeMessage($arg1)
    {
    throw new PendingException();
    }
    /**
    * @When je modifie un :arg1
    */
    public function jeModifieUn($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Given je suis connecté en tant que :arg1
    */
    public function jeSuisConnecteEnTantQue($arg1)
    {
    $user = new User(1, "Toto", "toto@toto.fr");
    echo $user->getMail();
    throw new PendingException();
    }
    /**
    * @When je click sur :arg1
    */
    public function jeClickSur($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Then je dois voir une fenêtre :arg1
    */
    public function jeDoisVoirUneFenetre($arg1)
    {
    throw new PendingException();
    }
    /**
    * @When je rentre les informations dans :arg1
    */
    public function jeRentreLesInformationsDans($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Then je dois voir un retour à la page accueil bloc_plus_un
    */
    public function jeDoisVoirUnRetourALaPageAccueilBlocPlusUn()
    {
    throw new PendingException();
    }
    /**
    * @Then le message :arg1 s'affiche
    */
    public function leMessageSAffiche($arg1)
    {
    throw new PendingException();
    }
    /**
    * @When je quitte la fenêtre :arg1
    */
    public function jeQuitteLaFenetre($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Then je dois voir une fenêtre de confirmation
    */
    public function jeDoisVoirUneFenetreDeConfirmation()
    {
    throw new PendingException();
    }
    /**
    * @When je supprime un :arg1
    */
    public function jeSupprimeUn($arg1)
    {
    throw new PendingException();
    }
    /**
    * @When le :arg1 est encore existant
    */
    public function leEstEncoreExistant($arg1)
    {
    throw new PendingException();
    }
    /**
    * @When je supprime un bloc
    */
    public function jeSupprimeUnBloc()
    {
    throw new PendingException();
    }
    /**
    * @When le :arg1 est inexistant
    */
    public function leEstInexistant($arg1)
    {
    throw new PendingException();
    }
    /**
    * @When je modifie un bloc
    */
    public function jeModifieUnBloc()
    {
    throw new PendingException();
    }
    /**
    * @Then je dois voir un retour à la page accueil
    */
    public function jeDoisVoirUnRetourALaPageAccueil()
    {
    throw new PendingException();
    }
    /**
    * @When le bloc est inexistant
    */
    public function leBlocEstInexistant()
    {
    throw new PendingException();
    }
    /**
    * @Given je tape l'url :arg1
    */
    public function jeTapeLUrl($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Given je ne suis pas connecté
    */
    public function jeNeSuisPasConnecte()
    {
    throw new PendingException();
    }
    /**
    * @Then j'accède à la page Accueil
    */
    public function jAccedeALaPageAccueil()
    {
    throw new PendingException();
    }
    /**
    * @Then je visualise les :arg1
    */
    public function jeVisualiseLes($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Then page :arg1 apparait
    */
    public function pageApparait($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Given je cherche un :arg1
    */
    public function jeChercheUn($arg1)
    {
    throw new PendingException();
    }
    /**
    * @When je clique sur le bouton filtrage
    */
    public function jeCliqueSurLeBoutonFiltrage()
    {
    throw new PendingException();
    }
    /**
    * @Then apparaissent :arg4 boutons nommés :arg1, :arg2 et :arg3
    */
    public function apparaissentBoutonsNommesEt($arg1, $arg2, $arg3, $arg4)
    {
    throw new PendingException();
    }
    /**
    * @Given je fais une recherche par :arg1
    */
    public function jeFaisUneRecherchePar($arg1)
    {
    throw new PendingException();
    }
    /**
    * @When je tape :arg1
    */
    public function jeTape($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Then le bloc en date du :arg1 apparait
    */
    public function leBlocEnDateDuApparait($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Then si pas de résultat
    */
    public function siPasDeResultat()
    {
    throw new PendingException();
    }
    /**
    * @Then le message :arg1 apparait
    */
    public function leMessageApparait($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Then les blocs avec titre :arg1 apparaissent
    */
    public function lesBlocsAvecTitreApparaissent($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Given je cherche un audio
    */
    public function jeChercheUnAudio()
    {
    throw new PendingException();
    }
    /**
    * @Then les blocs :arg1 apparaissent
    */
    public function lesBlocsApparaissent($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Then si pas de résultats
    */
    public function siPasDeResultats()
    {
    throw new PendingException();
    }
    /**
    * @Given je filtre sur le titre :arg1
    */
    public function jeFiltreSurLeTitre($arg1)
    {
    throw new PendingException();
    }
    /**
    * @When valide ma recherche
    */
    public function valideMaRecherche()
    {
    throw new PendingException();
    }
    /**
    * @Then les blocs :arg1 avec titre :arg2 apparaissent
    */
    public function lesBlocsAvecTitreApparaissent2($arg1, $arg2)
    {
    throw new PendingException();
    }
    /**
    * @Given je filtre sur la date :arg1
    */
    public function jeFiltreSurLaDate($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Then les blocs :arg1 avec date":arg2-:arg3-:arg4" apparaissent
    */
    public function lesBlocsAvecDateApparaissent($arg1, $arg2, $arg3, $arg4)
    {
    throw new PendingException();
    }
    /**
    * @Given je cherche une video
    */
    public function jeChercheUneVideo()
    {
    throw new PendingException();
    }
    /**
    * @Given je cherche un video
    */
    public function jeChercheUnVideo()
    {
    throw new PendingException();
    }
    /**
    * @Then les blocs :arg1 avec :arg2 apparaissent
    */
    public function lesBlocsAvecApparaissent($arg1, $arg2)
    {
    throw new PendingException();
    }
    /**
    * @Given je cherche une image
    */
    public function jeChercheUneImage()
    {
    throw new PendingException();
    }
    /**
    * @Given le visiteur veut se connecter
    */
    public function leVisiteurVeutSeConnecter()
    {
    throw new PendingException();
    }
    /**
    * @When je clique sur le bouton :arg1
    */
    public function jeCliqueSurLeBouton($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Then une modal box apparait
    */
    public function uneModalBoxApparait()
    {
    throw new PendingException();
    }
    /**
    * @Given le visiteur se connecte
    */
    public function leVisiteurSeConnecte()
    {
    throw new PendingException();
    }
    /**
    * @When il saisit ses ID
    */
    public function ilSaisitSesId()
    {
    throw new PendingException();
    }
    /**
    * @When ils sont ok
    */
    public function ilsSontOk()
    {
    throw new PendingException();
    }
    /**
    * @Then il sera connecté en tant que user
    */
    public function ilSeraConnecteEnTantQueUser()
    {
    throw new PendingException();
    }
    /**
    * @When ils sont ko
    */
    public function ilsSontKo()
    {
    throw new PendingException();
    }
    /**
    * @Then le message d'erreur :arg1 apparait
    */
    public function leMessageDErreurApparait($arg1)
    {
    throw new PendingException();
    }
    /**
    * @When il resaisit ses ID pour la 3e fois
    */
    public function ilResaisitSesIdPourLaEFois()
    {
    throw new PendingException();
    }
    /**
    * @Given le visiteur a perdu ses ID
    */
    public function leVisiteurAPerduSesId()
    {
    throw new PendingException();
    }
    /**
    * @When il clique sur :arg1
    */
    public function ilCliqueSur($arg1)
    {
    throw new PendingException();
    }
    /**
    * @Then un prompt :arg1
    */
    public function unPrompt($arg1)
    {
    throw new PendingException();
    }
    /**
    * @When le visiteur tape son adresse mail
    */
    public function leVisiteurTapeSonAdresseMail()
    {
    throw new PendingException();
    }
    /**
    * @When appuie sur valider
    */
    public function appuieSurValider()
    {
    throw new PendingException();
    }
    /**
    * @Then un email avec un lien de réinitialisation de mot de passe lui est envoyé
    */
    public function unEmailAvecUnLienDeReinitialisationDeMotDePasseLuiEstEnvoye()
    {
    throw new PendingException();
    }
    /**
    * @Given le visiteur est sur sa boite mail
    */
    public function leVisiteurEstSurSaBoiteMail()
    {
    throw new PendingException();
    }
    /**
    * @When il clique sur le lien
    */
    public function ilCliqueSurLeLien()
    {
    throw new PendingException();
    }
    /**
    * @Then une fenetre avec champs de réinitialisation mot de passe s'ouvre
    */
    public function uneFenetreAvecChampsDeReinitialisationMotDePasseSOuvre()
    {
    throw new PendingException();
    }
    /**
    * @When il change son mot de passe
    */
    public function ilChangeSonMotDePasse()
    {
    throw new PendingException();
    }
    /**
    * @When il appuie sur valider
    */
    public function ilAppuieSurValider()
    {
    throw new PendingException();
    }                                                         
    
} 