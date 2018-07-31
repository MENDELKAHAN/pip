<?php

class Dashboard extends Controller {
	
	function index()
	{

		$session = $this->loadHelper('Session_helper');	
		if($session->get('logedin')){
			$template = $this->loadView('dashboard');
			$template->render();
		}else{
			$this -> redirect('login');
			
		}

    }


    public function logout()
    {
    	$session = $this->loadHelper('Session_helper');	
		$session->destroy();
		$this -> redirect('login');
    }
}

?>