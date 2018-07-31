<?php

class Register extends Controller {
	
	function index()
	{
		$template = $this->loadView('register');
		$template->render();
	}

	public function create()
	{
        $model = $this-> loadModel("register_model");
        $model -> create();
	}
    
}

?>