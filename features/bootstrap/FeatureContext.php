<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;

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