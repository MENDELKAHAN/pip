<?php

class Login_model extends Model {

	public function login()
	{
		if(isset($_POST['login'])){
			$values = $_POST['login'];
			$user = $this->escapeString($values['user']);
			$password = $this->escapeString($values['password']);
		
			if($this -> authenticate($user, $password)){
                return true;
         }else{
            return false;
         }

		
		}
	}

	// authenticate finds the user and tests the password
    public function authenticate($username="", $password="") {
       
        $sql = "SELECT * FROM   users  WHERE username =" . "'". $username ."'";
        $result_set = $this -> execute($sql);
      
        if($result_set->num_rows > 0){
            $result_set = $this -> execute($sql);
            $row =  mysqli_fetch_assoc($result_set);

            if(password_verify ($password , $row['password'])){
                return true;
            }else{
                return false;
            }
        }
	}
}

?>
		
		
