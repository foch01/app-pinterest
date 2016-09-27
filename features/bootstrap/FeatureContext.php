<?php
    use Behat\Behat\Context\Context;
    use Behat\Behat\Context\SnippetAcceptingContext;
    use Behat\Gherkin\Node\PyStringNode;
    use Behat\Gherkin\Node\TableNode;
    use Behat\Behat\Tester\Exception\PendingException;
    use Entity\user;
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
			$this->new_user = new SuperAdmin();
		} 
    }
        
    /**
    * @When Le pseudo est déjà dans la base donnée
    */
    public function lePseudoEstDejaDansLaBaseDonnee()
    {
    	$this->new_user->setPseudo("testSuperAdmin");
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
	    $user = new SuperAdmin();
	    $user->setPseudo("testSuperAdmin");
	    $user->setPwd("facesimplon");
	    $connected = $user->connectSuperAdmin();
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
	 	$user = new SuperAdmin("testSuperAdmin", "facesimplon");
	    $connected = $user->connectSuperAdmin();
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
         $this->new_user->createAdmin();
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

}