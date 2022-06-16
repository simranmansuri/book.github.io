<?php
namespace App\database;
 use PDO;
/**
*
* Database connection for all class (any class use this connection by extends Database class)
*/
class Database extends PDO{
	//Properties for database conection info .
	private $dsn  		= 'mysql:host=localhost;dbname=bookshop1';
	private $dbuser 	= 'root';
	private $dbpassword = '';


	public function __construct(){
		try{
			parent::__construct($this->dsn, $this->dbuser, $this->dbpassword);
			if (!isset($_SESSION)) {
				session_start();
			}
		}catch(PDOExecption $e){
			echo 'Error'.$e->getMessage();
		}
	}

}