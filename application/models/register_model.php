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

			$result = $this->query('SELECT * FROM users WHERE username="'. $user .'"');
			if(!empty($result)){
				// user exists	
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
			

			// inset new user
			// return message


		}
		

	}

}

?>
