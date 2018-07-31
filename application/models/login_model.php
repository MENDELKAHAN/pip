<?php

class Login_model extends Model {

	public function login()
	{
		if(isset($_POST['login'])){
			$values = $_POST['login'];
			$user = $this->escapeString($values['user']);
			$password = $this->escapeString($values['password']);
		
			if($this -> authenticate($user, $password)){


         	$_SESSION["logedin"] = true;
         	header("location: ../dashboard");
         	// $this-> redirect("dashboard");
         }else{
         	header("location: ../login");
			// $this-> redirect("login");

         }

		
		}
	}

	// authenticate finds the user and tests the password
    public function authenticate($username="", $password="") {
       
        $sql = "SELECT * FROM   users  WHERE username =" . "'". $username ."'";
        $result_set = $this -> connection ->query($sql);
      
        if($result_set->num_rows > 0){
            $result_set = $this -> connection ->query($sql);
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
		
		
