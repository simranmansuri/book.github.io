<?php 
namespace App\admin\authors;
use App\database\Database;

/**
* Bestsellers class for access Bestsellers Module or Bestsellers table
*
*/
class Authors extends Database{




	//properties for gethering facts table info
	private $title = '';					
	private $img   = '';
	private $name    ='';

	private $id = '';



	public function __construct(){

		parent::__construct();
	}			
	//Set data for facts table
	public function setData($data = ''){

		if(array_key_exists('title',$data) AND !empty($data['title'])){
			$this->title = filter_var($data['title'],FILTER_SANITIZE_STRING);
		}
		if(array_key_exists('name',$data) AND !empty($data['name'])){
			$this->name = filter_var($data['name'],FILTER_SANITIZE_STRING);
		}
		

		if(array_key_exists('img',$data)){
			$this->img = $data['img'];
		}			
				
		
					
		if(array_key_exists('id',$data)){
			$this->id = $data['id'];
		}

		return $this;
	}

	// //Insert data into portfolios table

	public function store(){

		
		
		$sql    ="INSERT INTO  writters (title,name,img) 
		VALUES(:title,:name,:img) ";
		$stmt   = $this->prepare($sql);

		$insert = $stmt->execute(array(
				
				
				':title' 			=>$this->title ,			
				':name' 	    =>$this->name, 				 				
				':img' 				=>$this->img, 				
			));

			

		if ($insert) {
			$_SESSION['pomsg'] = "Succesfully added ";
			header('Location:create.php');
		}

	}
	// //View all Bestsellers info 
	public function index(){
		$sql  = "SELECT * FROM writters";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}	


	// //View single Bestsellers info 
	public function show(){
		$sql  = "SELECT * FROM writters WHERE id='$this->id'";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetch();
		return $data;
	}	
	//Update Bestseller info 
	public function update(){
		
		if (!empty($this->img)) {
			$sql = "UPDATE writters SET 	title=:title,name=:name,img=:img WHERE id=:id";
			$stmt	 = $this->prepare($sql);
			$updated = $stmt->execute(array(
			
				
				':title' 		=>$this->title ,
				':name' 	=>$this->name ,
				
				':img' 			=>$this->img,
				':id' 			=>$this->id,
			));
		}else{
			$sql = "UPDATE writters SET title=:title,name=:name   WHERE id=:id";
			$stmt	 = $this->prepare($sql);
			$updated = $stmt->execute(array(
				':title' 		=>$this->title ,
				':name' 	=>$this->name ,
				':id' 			=>$this->id,
			));
		}
		if ($updated == true) {
			$_SESSION['pomsg'] = "Succesfully updated";
			header('Location:index.php');
		}else{
			$_SESSION['pofail'] = "Something Database worng!";
			header('Location:index.php');
		}
	}


		//Delete Bestsellers info 
		public function softDelete(){
			$sql = "DELETE FROM writters WHERE id = '$this->id' " ;
			$stmt	 = $this->prepare($sql);
			$deleted = $stmt->execute();
			if ($deleted == true) {
				unlink('../../assets/upload/');
				$_SESSION['pomsg'] = "Succesfully deleted";
				header('Location:index.php');
			}

			//For file unlink
			$sql  = "SELECT * FROM writters WHERE id='$this->id'";
			$stmt = $this->prepare($sql);
			$stmt->execute();
			$data = $stmt->fetch();
			$image = "../../assets/upload/".$data['img'];

			return $image;

		}	



}