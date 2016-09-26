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
			$this->new_user = new User();
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
	 	$user = new User("testuser", "nnnn");
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
    	$user = new User("testuser", "nnnn", "erroneous@wanalike.fr");
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
     * @Given je tape l'url :arg1
     */
    /*public function jeTapeLUrl($arg1)
    {
        /*throw new PendingException();*/
    /*}*/
    /**
     * @Given je ne suis pas connecté
     */
   /* public function jeNeSuisPasConnecte()
    {
    	if(!$this->$connected_user){
    		echo 'Not Connected !!';
	   	}
        /*throw new PendingException();*/
    }
    /**
     * @Then j'accède à la page Accueil
     */
   /* public function jAccedeALaPageAccueil()
    {
        throw new PendingException();
    }
    /**
     * @Then je visualise les :arg1
     */
    /*public function jeVisualiseLes($arg1)
    {
        throw new PendingException();
    }*/ 