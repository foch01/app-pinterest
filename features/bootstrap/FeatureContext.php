<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

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
     * @Given je suis connecté en tant que :arg1
     */
    public function jeSuisConnecteEnTantQue($arg1)
    {
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

}


Scenario :	"Admin" créer un bloc valide
	Étant donné que je suis connecté en tant que "Admin"
	Quand je rentre les informations dans la fenêtre de bloc
	Alors je dois voir un retour à la page accueil avec le nouveau bloc
	Et le message "Votre ajout à bien été pris en compte" est affiché