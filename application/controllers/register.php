<?php

class Register extends Controller {
	
	function index()
	{
		$template = $this->loadView('register');
		// use config
		// $template->set('url', "http://localhost:8080/pip/");
		$template->render();
	}

	public function create()
	{
        $model = $this-> loadModel("register_model");
        $model -> create();
	}
    
}

?>