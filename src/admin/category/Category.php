<?php 
namespace App\admin\category;
use App\database\Database;

/**
* Category class for access Category Module or Category table
*
*/
class Category extends Database{




	//properties for gethering facts table info
	private $name = '';					

	private $id = '';



	public function __construct(){

		parent::__construct();
		
	}			
	//Set data for facts table
	public function setData($data = ''){

		if(array_key_exists('category',$data) AND !empty($data['category'])){
			$this->name = filter_var($data['category'],FILTER_SANITIZE_STRING);
		}
		
		
				
		
					
		if(array_key_exists('id',$data)){
			$this->id = $data['id'];
		}
		return $this;
	}

	// //Insert data into portfolios table

	public function store(){


		
		$sql    ="INSERT INTO  categorys (name) 
									VALUES(:name) ";
		$stmt   = $this->prepare($sql);

		$insert = $stmt->execute(array(
				 
				':name' 				=>$this->name 				
			));		

		if ($insert) {
			$_SESSION['pomsg'] = "Succesfully added ";
			header('Location:create.php');
		}
		else{
			$_SESSION['pomsg'] = "Database Error ";
			header('Location:create.php');
		}


	}
	// //View all categorys info 
	public function index(){
		$sql  = "SELECT * FROM categorys";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	// //View single Bestsellers info 
	public function show(){
		$sql  = "SELECT * FROM categorys WHERE id='$this->id'";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetch();
		return $data;
	}

	// //View single Bestsellers info 
	public function showname($id){
		$sql  = "SELECT * FROM categorys WHERE id='$id'";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetch();
		return $data;
	}	

	
	//Update Category info 
	public function update(){
		
		
			$sql = "UPDATE categorys SET name=:name  WHERE id=:id";
			
			$stmt	 = $this->prepare($sql);
			$updated = $stmt->execute(array(
				':name' 		=>$this->name,
				':id' 			=>$this->id
			));

		if ($updated == true) {
			$_SESSION['pomsg'] = "Succesfully updated";
			header('Location:index.php');
		}
		else{
			$_SESSION['pofail'] = "Something Database worng!";
			header('Location:edit.php');
		}
	}


	//Delete Contact info 
	public function softDelete(){
			$sql = "DELETE FROM categorys WHERE id = '$this->id' " ;
			$stmt	 = $this->prepare($sql);
			$data = $stmt->execute();

			if ($data) {
			
				$_SESSION['pomsg'] = "Succesfully deleted";
				header('Location:index.php');
			}

			return $data;

		}



}