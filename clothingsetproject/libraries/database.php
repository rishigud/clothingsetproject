<?php include 'config/config.php'?>

<?php

  class Database{
	private $host=DB_HOST;
	private $user=DB_USER;
	private $pass=DB_PASS;
	private $database=DB_DATABASE;
	public $link;
	public $error;

	
public function __construct(){
	
	$this->connect();
	
	
}
	
	public function connect(){
		
		$this->link=new mysqli($this->host,$this->user,$this->pass,$this->database);
		
		if(!$this->link){
			
			$this->error="connection failed:".$this->link->connect_error;
			return false;
			
		}
		
	}
	
	
	public function select($query){
		
		$result=$this->link->query($query);
		
		if($result->num_rows>0){
			
			return $result;
			
		} else{
			
			return false;
		}
		
		
	}
	
	public function insert($query){
		
		$insert_row=$this->link->query($query) or die($this->link->error.__LINE__);
		
		if($insert_row){
		header("Location:index.php?msg=".urlencode('Record added to database'));
		
	exit();
		}
	else{
			die('Error : ('.$this->link->errno.')'.$this->link->error);
			
		}
	
		
	}
	
	public function update($query){
		
		$update_row=$this->link->query($query) or die($this->link->error.__LINE__);
		
		if($update_row){
		header("Location:index.php?msg=".urlencode('Record updated'));
		
	exit();
		}
	else{
			die('Error : ('.$this->link->errno.')'.$this->link->error);
			
		}
	
		
	}
	public function delete($query){
		
		$delete_row=$this->link->query($query) or die($this->link->error.__LINE__);
		
		if($delete_row){
		header("Location:index.php?msg=".urlencode('Record deleted'));
		
	exit();
		}
	else{
			die('Error : ('.$this->link->errno.')'.$this->link->error);
			
		}
	
		
	}
}


?>