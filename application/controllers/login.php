<?php

class Login extends Controller {
	
	function index()
	{
		$template = $this->loadView('login');
		$template->render();
	}

	public function login()
	{
		 $session = $this->loadHelper('Session_helper');
		 $session->set("logedin", false);

		 $model = $this-> loadModel("login_model");
         $value =  $model -> login();

         if(! is_null($value)){

         	if($value){
         	
			$session->set("logedin", true);
         	$this-> redirect("dashboard");
         }else{

         	// $template = $this->loadView('login');
         	// $template->set("message", "login unsuccessful try again");
         	// $template->render();
			$this-> redirect("login");
         }
	}

         }
       	

    
}

?>