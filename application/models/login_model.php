<?php

class Login_model extends Model {

	public function login()
	{
		if(isset($_POST)){
			$values = $_POST['login'];
			
			// test user dose not exists 
			$user = $this->escapeString($values['user']);
			$password = $this->escapeString($values['password']);
			authenticate($user="", $password="");		
		}
	}

	public function verify($password, $db_password){
			return password_verify ($password , $db_password);
		}	

    public function authenticate($username="", $password="") {

        $username = self::$database->escape_string($username);
        $password = self::$database->escape_string($password);
       
        $sql = "SELECT * FROM   users  WHERE usersname =" . "'". $username ."'";
        $result_set = self::$database->query($sql);
      
        if($result_set->num_rows > 0){
           
            $result_set = self::$database->query($sql);
            $row =  mysqli_fetch_assoc($result_set);
            if(password_verify ($password , $db_password)){
                return true;
            }else{
                return false;
            }
        }


}
}

?>
		
		
