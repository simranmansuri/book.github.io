<?php 
namespace App\admin\request;
use App\database\Database;

/**
* Bestsellers class for access Bestsellers Module or Bestsellers table
*
*/
class Request extends Database{




	//properties for gethering facts table info
	private $name = '';					
	private $email   = '';

	private $url ='';	
	private $books	 ='';	
	private $description    ='';
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
		if(array_key_exists('url',$data) AND !empty($data['url'])){
			$this->url = filter_var($data['url'],FILTER_SANITIZE_STRING);
		}
		
		if(array_key_exists('books',$data) AND !empty($data['books'])){
			$this->books = filter_var($data['books'],FILTER_SANITIZE_STRING);
		}
		
		if(array_key_exists('description',$data) AND !empty($data['description'])){
			$this->description = filter_var($data['description'],FILTER_SANITIZE_STRING);
		}		
				
		
					
		if(array_key_exists('id',$data)){
			$this->id = $data['id'];
		}
		return $this;
	}

	// //Insert data into portfolios table

	public function store(){

		
		
		$sql    ="INSERT INTO  requests (name,url,email,books,description) 
									VALUES(:name,:url,:email,:books,:description) ";
		$stmt   = $this->prepare($sql);

		$insert = $stmt->execute(array(
				
				
				':name' 			=>$this->name ,			
				':url' 	    		=>$this->url, 				
				':email' 			=>$this->email, 				
				':books' 			=>$this->books,
				':description' 			=>$this->description, 				
				 				
			));

			

		if ($insert) {
			$_SESSION['pomsg'] = "Succesfully added ";
			header('Location:../../request-book.php');
		}

	}
	// //View all Bestsellers info 
	public function index(){
		$sql  = "SELECT * FROM requests";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}




		//Delete Bestsellers info 
		public function softDelete(){
			$sql = "DELETE FROM requests WHERE id = '$this->id' " ;
			$stmt	 = $this->prepare($sql);
			$data = $stmt->execute();

			if ($data) {
			
				$_SESSION['pomsg'] = "Succesfully deleted";
				header('Location:index.php');
			}

			return $data;

		}	





}