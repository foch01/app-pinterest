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
    	private $new_user;
    	private $connected_user;
        private $query_status;
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
		if($arg1 == "ajouter un admin" || $arg1 == "supprimer un admin"){
			$this->new_user = new User();
            $this->new_user->setPseudo("User_bidon");
            $this->new_user->setPwd("bonjour");
            $this->new_user->setMail("user.bidon@test.local");
		} 
    }
        
    /**
    * @When Le pseudo est déjà dans la base donnée
    */
    public function lePseudoEstDejaDansLaBaseDonnee()
    {
    	$this->new_user->setPseudo("testuser");
    }
        
    /**
    * @When l'email est déjà dans la base donnée
    */
    public function lEmailEstDejaDansLaBaseDeDonnee()
    {
        /*$user = new User("testuser", "nnnn", "erroneous@wanalike.fr");
        if($user->searchByEmail()){
        	throw new Exception("Found a record but email is erroneous");
        } */
        $this->new_user->setMail("reddeveloppement@wanalike.fr");
    }
        
    /**
    * @Given je suis connecté en tant que :arg1
    */
    public function jeSuisConnecteEnTantQue($arg1)
    {
        // FIXME : Manage user roles
	    $user = new User();
	    $user->setPseudo("testuser");
	    $user->setPwd("nnnn");
	    $connected = $user->connect();
	    if ($connected){
	        echo "OK";
	    }
	    else {
	      	
	        throw new Exception("Impossible to connect");
	    }
    }
   
    /**
    * @Given le visiteur se connecte
    */
    public function leVisiteurSeConnecte()
    {
	 	//TODO
       }
    
    /**
    * @When il change son mot de passe
    */
    public function ilChangeSonMotDePasse()
    {
    	$user = new SuperAdmin("testuser", "nnnn", "erroneous@wanalike.fr");
        if($user->ChangePass()){
        	echo ("Our Password is not Changed");
        }       
    /*throw new PendingException();*/
    }
   
    /**
     * @When je créé mon admin
     */
    public function jeCreeMonAdmin()
    {
         $this->query_status = $this->new_user->create();
    }
        
    /**
     * @Then je dois voir le message :arg1
     */
    public function jeDoisVoirLeMessage($arg1)
    {
        switch($arg1){
            case "Votre ajout a bien été pris en compte":
            case "Votre suppression a bien été prise en compte":
                if(!$this->query_status)
                    throw new Exception("Error lors de la requete SQL");
                break;
            case "Cet utilisateur est déjà existant":
                if($this->query_status)
                    throw new Exception("Error lors de la requete SQL. L'enregistrement a pu être créé");
                break;
                 
        }
    }
        
    /**
     * @Then je dois pouvoir accéder à la partie ajout admin
     */
    public function jeDoisPouvoirAccederALaPartieAjoutAdmin()
    {
        echo "Vous pouvez accéder à la partie d'ajout d'un admin";
    }

    /**
     * @Then le message :arg1 s'affiche
     */
    public function leMessageSAffiche($arg1)
    {
        echo "Votre ajout a bien été pris en compte";
    }
        
    /**
     * @When je supprime mon admin
     */
    public function jeSupprimeMonAdmin()
    {
        //$this->query_status = $this->new_user->delete();
    }
        
     /**
     * @When je change mon password
     */
    public function jeChangeMonPassword()
    {
        $this->new_user = new User();
        $this->new_user->setId(54);
        $this->new_user->setPseudo("User Changed");
        $this->new_user->setPwd("pouet");
        $this->new_user->setMail("pouet@pouet.pouet");
        $this->query_status = $this->new_user->update();
    }

    /**
     * @Then je dois voir le message Votre mail a bien été modifié
     */
    public function jeDoisVoirLeMessageVotreMailABienEteModifie()
    {
        throw new PendingException();
    }

    /**
     * @When je change mon mail
     */
    public function jeChangeMonMail()
    {
        throw new PendingException();
    }


}