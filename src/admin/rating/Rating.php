<?php 
namespace App\admin\rating;
use App\database\Database;

/**
* Bestsellers class for access Bestsellers Module or Bestsellers table
*
*/
class Rating extends Database{




	//properties for gethering facts table info
	private $name = '';
	private $proid = '';					
	private $email   = '';
	private $rating ='';	
	private $description	 ='';	
	private $id = '';



	public function __construct(){

		parent::__construct();
	}			
	//Set data for facts table
	public function setData($data = ''){

		if(array_key_exists('name',$data) AND !empty($data['name'])){
			$this->name = filter_var($data['name'],FILTER_SANITIZE_STRING);
		}
		
		if(array_key_exists('email',$data) AND !empty($data['email'])){
			$this->email = filter_var($data['email'],FILTER_SANITIZE_STRING);
		}
		if(array_key_exists('proid',$data) AND !empty($data['proid'])){
			$this->proid = filter_var($data['proid'],FILTER_SANITIZE_NUMBER_INT);
		}

		if(array_key_exists('example',$data) AND !empty($data['example'])){
			$this->rating = filter_var($data['example'],FILTER_SANITIZE_NUMBER_INT);
		}
		
		
		
		if(array_key_exists('message',$data) AND !empty($data['message'])){
			$this->description = filter_var($data['message'],FILTER_SANITIZE_STRING);
		}		
				
		
					
		if(array_key_exists('id',$data)){
			$this->id = $data['id'];
		}
		return $this;
	}

	// //Insert data into portfolios table

	public function store(){

		
		
		$sql    ="INSERT INTO  ratings (proid,rating,name,email,description)

							VALUES(:proid,:rating,:name,:email,:description) ";
		$stmt   = $this->prepare($sql);

		$insert = $stmt->execute(array(
				
				
				':proid' 			=>$this->proid ,			
				':rating' 	    		=>$this->rating, 				
				':name' 			=>$this->name, 				
				':email' 			=>$this->email,
				':description' 			=>$this->description				
				 				
			));

			

		if ($insert) {
			$_SESSION['pomsg'] = "Succesfully added ";
			header('Location:../../product-single.php');
		}
		else {
			$_SESSION['pomsg'] = "Database Problem ";
			header('Location:../../product-single.php');
		}

	}
	// //View all Bestsellers info 
	public function index(){
		$sql  = "SELECT * FROM ratings  LEFT JOIN products on ratings.proid=products.id ";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}




		//Delete Contact info 
		public function softDelete(){
			$sql = "DELETE FROM contacts WHERE id = '$this->id' " ;
			$stmt	 = $this->prepare($sql);
			$data = $stmt->execute();

			if ($data) {
			
				$_SESSION['pomsg'] = "Succesfully deleted";
				header('Location:index.php');
			}

			return $data;

		}	





}