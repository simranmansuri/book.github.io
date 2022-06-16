<?php 
namespace App\frontview;
use App\database\Database;

/**
* Bestsellers class for access Bestsellers Module or Bestsellers table
*
*/
class Cart extends Database{




	//properties for gethering facts table info
	private $proid = '';
	private $sid = '';
	private $title = '';
	private $quantity = '';
	private $prices = '';
	private $img = '';			
	private $id = '';	
				
	
	




	public function __construct(){

		parent::__construct();
	}			
	//Set data for facts table
	public function setData($data = ''){

		
		if(array_key_exists('quantity',$data) AND !empty($data['quantity'])){
			$this->quantity = filter_var($data['quantity'],FILTER_SANITIZE_NUMBER_INT);
		}
		if(array_key_exists('proid',$data) AND !empty($data['proid'])){
			$this->proid = filter_var($data['proid'],FILTER_SANITIZE_NUMBER_INT);
		}
		if(array_key_exists('title',$data) AND !empty($data['title'])){
			$this->title = filter_var($data['title'],FILTER_SANITIZE_STRING);
		}
		if(array_key_exists('prices',$data) AND !empty($data['prices'])){
			$this->prices = filter_var($data['prices'],FILTER_SANITIZE_NUMBER_INT);
		}
		if(array_key_exists('img',$data)){
			$this->img = $data['img'];
		}
		if(array_key_exists('id',$data)){
			$this->id = $data['id'];
		}

		 $this->sid = session_id();

		return $this;
	}

	// //Insert data into Cart table

	public function store(){

		
		
		$sql    ="INSERT INTO  cart (proid,sid,title,quantity,prices,img) 
				VALUES(:proid,:sid,:title,:quantity,:prices,:img) ";
		$stmt   = $this->prepare($sql);

		$insert = $stmt->execute(array(
				
				
				':proid' 			=>$this->proid ,			
				':sid' 	    		=>$this->sid, 				
				':title' 			=>$this->title, 				
				':quantity' 		=>$this->quantity,
				':prices' 			=>$this->prices, 
				':img' 				=>$this->img, 				
				 				
			));

			

		if ($insert) {
			$_SESSION['pomsg'] = "Succesfully added ";
			header('Location:../../product-cart.php');
		}
		else{
			$_SESSION['pomsg'] = "Database problem ";
			header('Location:../../index.php');
		}

	}
	// //View all Bestsellers info 
	public function index(){
		$sql  = "SELECT * FROM cart";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}




		//Delete Bestsellers info 
		public function softDelete(){
			$sql = "DELETE FROM cart WHERE id = '$this->id' " ;
			$stmt	 = $this->prepare($sql);
			$data = $stmt->execute();

			if ($data) {
			
				$_SESSION['pomsg'] = "Succesfully deleted";
				header('Location:../../index.php');
			}

			else {
			
				$_SESSION['pomsg'] = "Database Problem";
				header('Location:../../product-cart.php');
			}



			return $data;

		}	





}