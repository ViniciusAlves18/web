<?php
/*
	Pdo class
*/
class pdoclass{

	private $connect = NULL;
	
	public function connection(){
		try{
			$this->connect = new PDO("pgsql:host=localhost;dbname=point","postgres","123");
		}
		catch(PDOException $e){
			exit($e->getMessage());
		}
			return $this->connect;
	}
}	
?>