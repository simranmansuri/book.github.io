<?php 
namespace App\admin\contacts;
use App\database\Database;

/**
* Bestsellers class for access Bestsellers Module or Bestsellers table
*
*/
class Contact extends Database{




	//properties for gethering facts table info
	private $name = '';					
	private $email   = '';

	private $phone ='';	
	private $subject	 ='';	
	private $msg    ='';
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
		if(array_key_exists('phone',$data) AND !empty($data['phone'])){
			$this->phone = filter_var($data['phone'],FILTER_SANITIZE_NUMBER_INT);
		}
		
		if(array_key_exists('subject',$data) AND !empty($data['subject'])){
			$this->subject = filter_var($data['subject'],FILTER_SANITIZE_STRING);
		}
		
		if(array_key_exists('msg',$data) AND !empty($data['msg'])){
			$this->msg = filter_var($data['msg'],FILTER_SANITIZE_STRING);
		}		
				
		
					
		if(array_key_exists('id',$data)){
			$this->id = $data['id'];
		}
		return $this;
	}

	// //Insert data into portfolios table

	public function store(){

		
		
		$sql    ="INSERT INTO  contacts (name,email,phone,subject,msg) 
									VALUES(:name,:email,:phone,:subject,:msg) ";
		$stmt   = $this->prepare($sql);

		$insert = $stmt->execute(array(
				
				
				':name' 			=>$this->name ,			
				':email' 	    		=>$this->email, 				
				':phone' 			=>$this->phone, 				
				':subject' 			=>$this->subject,
				':msg' 			=>$this->msg, 				
				 				
			));

			

		if ($insert) {
			$_SESSION['pomsg'] = "Succesfully added ";
			header('Location:../../contact.php');
		}

	}
	// //View all Bestsellers info 
	public function index(){
		$sql  = "SELECT * FROM contacts";
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