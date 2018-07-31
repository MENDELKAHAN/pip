<?php

class Model {

	private $connection;

	public function __construct()
	{
		global $config;
		
		$this->connection = mysqli_connect($config['db_host'], $config['db_username'], $config['db_password'], $config['db_name'])
		or die('MySQL Error: '. mysql_error());

		// mysqli::select_db($config['db_name'], $this->connection);
	}

	public function escapeString($string)
	{
		return $this ->connection->escape_string($string);
	}

	public function escapeArray($array)
	{
	    array_walk_recursive($array, create_function('&$v', '$v = mysql_real_escape_string($v);'));
		return $array;
	}
	
	public function to_bool($val)
	{
	    return !!$val;
	}
	
	public function to_date($val)
	{
	    return date('Y-m-d', $val);
	}
	
	public function to_time($val)
	{
	    return date('H:i:s', $val);
	}
	
	public function to_datetime($val)
	{
	    return date('Y-m-d H:i:s', $val);
	}
	
	public function query($qry)
	{
		$result_set =  $this -> connection -> query($qry);

		// mysql_query($qry) or die('MySQL Error: '. mysql_error());
		$resultObjects = array();

		while ($row = mysqli_fetch_array($result_set)){     
            $resultObjects[] = $row;   
        }
           return $resultObjects;
    }

    public function insert($qry)
	{
		if ($this -> connection -> query($qry))
		{
			return $this -> connection -> insert_id;
		}
			return false;

	}

	public function execute($qry)
	{
		$exec = mysql_query($qry) or die('MySQL Error: '. mysql_error());
		return $exec;
	}
    
}
?>
