<?php
    use Behat\Behat\Context\Context;
    use Behat\Behat\Context\SnippetAcceptingContext;
    use Behat\Gherkin\Node\PyStringNode;
    use Behat\Gherkin\Node\TableNode;
    use Behat\Behat\Tester\Exception\PendingException;
    use Entity\User;
    use Entity\SuperUser;
    /**
    * Defines application features from the specific context.
    */
    class FeatureContext implements Context, SnippetAcceptingContext
    {
    	private $new_user;
    	private $connected_user;
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
		if($arg1 == "ajouter un admin"){
			$this->new_user = new SuperUser();
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
        $this->new_user->setMail("facesimplon@facesimplon.com");
    }
        
    /**
    * @Given je suis connecté en tant que :arg1
    */
    public function jeSuisConnecteEnTantQue($arg1)
    {
	    $user = new SuperUser();
	    $user->setPseudo("testSuperAdmin");
	    $user->setPwd("facesimplon");
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
	 	$user = new SuperUser("testSuperAdmin", "facesimplon");
	    $connected = $user->connect();
	    if ($connected){
	        echo "OK";
	    }
	    else {
	        throw new Exception("Impossible to connect");
	    }
       }
    
    /**
    * @When il change son mot de passe
    */
    public function ilChangeSonMotDePasse()
    {
    	$user = new SuperUser("testuser", "nnnn", "erroneous@wanalike.fr");
        if($user->ChangePass()){
        	echo ("Our Password is not Changed");
        }       
    /*throw new PendingException();*/
    }
   
    /**
     * @When je créé mon utilisateur
     */
    public function jeCreeMonUtilisateur()
    {
        $this->new_user->create();
    }
        
    /**
     * @Then je dois voir le message :arg1
     */
    public function jeDoisVoirLeMessage($arg1)
    {
        if($_SESSION['error_msg']!=$arg1){
        	throw new \Exception("Error, we did not recieve the correct error message");
        }
    }
        
    /**
     * @When je click sur ajouter un :arg1
     */
    public function jeClickSurAjouterUn($arg1)
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

}