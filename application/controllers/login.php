<?php

class Login extends Controller {
	
	function index()
	{
		$template = $this->loadView('login');
		$template->render();
	}

	public function login()
	{
		 $model = $this-> loadModel("login_model");
        $model -> login();
	}
    
}

?>