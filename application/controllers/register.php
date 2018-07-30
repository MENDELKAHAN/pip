<?php

class Register extends Controller {
	
	function index()
	{
		$template = $this->loadView('register');
		$template->render();
	}
    
}

?>