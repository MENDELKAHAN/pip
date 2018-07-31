<?php

class Register_model extends Model {
	
	public function create()
	{
		if(isset($_POST)){
			$values = $_POST['register'];
			
			// test iser dose not excist 
			$user = $this->escapeString($values['user']);
			$result = $this->query('SELECT * FROM users WHERE user="'. $user .'"');

			// test passwords match


		// $result = $this->query('SELECT * FROM something WHERE id="'. $id .'"');
		// return $result;

		
		// public static function  create_password($input){
		// 		return  password_hash ($input , PASSWORD_DEFAULT);
		// }

		// public function verify($password, $db_password){
		// 	return password_verify ($password , $db_password);
		// }	


			// inset new user
			// return message


		}
		

		// $id = $this->escapeString($id);
		// $result = $this->query('SELECT * FROM something WHERE id="'. $id .'"');
		// return $result;
	}

}

?>
