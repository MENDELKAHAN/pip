<?php

class Dashboard extends Controller {
	
	function index()
	{

				
		if($session->get('logedin')){
			$template = $this->loadView('dashboard');
			$template->render();
		}
			$template = $this->loadView('login');
			$template->render();
	}

	

    
}

?>