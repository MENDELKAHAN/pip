<?php

class Register_model extends Model {
	
	public function create()
	{
		if(isset($_POST)){
			$values = $_POST['register'];
			
			// test user dose not exists 
			$user = $this->escapeString($values['user']);
			$password = $this->escapeString($values['password']);
			$password_2 = $this->escapeString($values['password_2']);


			if(! $this->test_user($user)){
				return false;
			}
						
			// test passwords match
			if($password != $password_2){
				// passwords don't match
				return false;
			}

			$password_hashed = password_hash ($password, PASSWORD_DEFAULT);
			$sql = "INSERT INTO `users`(`username`, `password`) VALUES ('$user', '$password_hashed')";
			$result = $this->insert($sql);
			
			if($result){
				$_SESSION["logedin"] = true;
         		header("location: ../dashboard");
			}
			
		}
	}

	// test user is a string greater then 0 and than user is not already a user 
	public function test_user($user)
	{
		if($user ==""){
				return false;
		}

		$result = $this->select('SELECT * FROM users WHERE username="'. $user .'"');
			if(!empty($result)){
				// user exists	
				return false;
		}
		return true;	
	}

}

?>
