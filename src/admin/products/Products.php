<?php 
namespace App\admin\products;
use App\database\Database;

/**
* Products class for access Bestsellers Module or Bestsellers table
*
*/
class Products extends Database{




	//properties for gethering facts table info
	private $title = '';					
	private $img   = '';

	private $description ='';	
	private $prices	 ='';	
	private $oldprices    ='';
	private $authors    ='';
	private $cat    ='';


	private $id = '';



	public function __construct(){

		parent::__construct();
	
	}			
	//Set data for facts table
	public function setData($data = ''){

		if(array_key_exists('title',$data) AND !empty($data['title'])){
			$this->title = filter_var($data['title'],FILTER_SANITIZE_STRING);
		}
		if(array_key_exists('oldprices',$data) AND !empty($data['oldprices'])){
			$this->oldprices = filter_var($data['oldprices'],FILTER_SANITIZE_NUMBER_INT);
		}
		if(array_key_exists('prices',$data) AND !empty($data['prices'])){
			$this->prices = filter_var($data['prices'],FILTER_SANITIZE_NUMBER_INT);
		}
		if(array_key_exists('cat',$data) AND !empty($data['cat'])){
			$this->cat = filter_var($data['cat'],FILTER_SANITIZE_NUMBER_INT);
		}
		if(array_key_exists('authors',$data) AND !empty($data['authors'])){
			$this->authors = filter_var($data['authors'],FILTER_SANITIZE_STRING);
		}

		if(array_key_exists('img',$data)){
			$this->img = $data['img'];
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

		
		
		
		$sql    ="INSERT INTO  products (title,oldprices,prices,authors,description,img,cat) 
									VALUES(:title,:oldprices,:prices,:authors,:description,:img,:cat) ";
		$stmt   = $this->prepare($sql);

		$insert = $stmt->execute(array(
				
				
				':title' 			=>$this->title ,			
				':oldprices' 	    =>$this->oldprices, 				
				':prices' 			=>$this->prices, 				
				':authors' 			=>$this->authors,
				':description' 			=>$this->description, 				
				':img' 				=>$this->img, 
				':cat' 				=>$this->cat, 				
			));

			

		if ($insert) {
			$_SESSION['pomsg'] = "Succesfully added ";
			header('Location:create.php');
		}

	}
	// //View all Bestsellers info 
	public function index(){
		$sql  = "SELECT * FROM products";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	// //View all Bestsellers info 
	public function post(){
		$sql  = "SELECT * FROM products ORDER BY id DESC LIMIT 6";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}	


	// //View all Bestseller info 
	public function widget(){
		$sql  = "SELECT * FROM products ORDER BY id DESC LIMIT 3";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	// //View all Category1 info 
	public function category(){
		$sql  = "SELECT * FROM products  LEFT JOIN categorys on products.cat=categorys.id  ";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	




	// //View single Bestsellers info 
	public function catsingle($id){
		$sql  = "SELECT * FROM products WHERE cat='$id'";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}


	// //View single Products info 
	public function show(){
		$sql  = "SELECT * FROM products WHERE id='$this->id'";
		$stmt = $this->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetch();
		return $data;
	}	


	//Update Bestseller info 
	public function update(){
		
		if (!empty($this->img)) {
			$sql = "UPDATE products SET 	title=:title,oldprices=:oldprices,prices=:prices,authors=:authors,description=:description,img=:img,cat=:cat  WHERE id=:id";
			$stmt	 = $this->prepare($sql);
			$updated = $stmt->execute(array(
			
				
				':title' 		=>$this->title ,
				':oldprices' 	=>$this->oldprices ,
				':prices' 		=>$this->prices ,
				':authors' 		=>$this->authors ,
				':description' 	=>$this->description ,
				':img' 			=>$this->img,
				':cat'			=>$this->cat,
				':id' 			=>$this->id,
			));
		}else{
			$sql = "UPDATE products SET title=:title,oldprices=:oldprices,prices=:prices,authors=:authors,description=:description,cat=:cat   WHERE id=:id";
			var_dump($sql);
			$stmt	 = $this->prepare($sql);
			$updated = $stmt->execute(array(
				':title' 		=>$this->title ,
				':oldprices' 	=>$this->oldprices ,
				':prices' 		=>$this->prices ,
				':authors' 		=>$this->authors ,
				':description' 	=>$this->description ,
				':cat'			=>$this->cat,
				':id' 			=>$this->id,
			));
		}
		if ($updated == true) {
			$_SESSION['pomsg'] = "Succesfully updated";
			header('Location:index.php');
		}else{
			$_SESSION['pofail'] = "Something Database worng!";
			header('Location:edit.php');
		}
	}


		//Delete Products info 
		public function softDelete(){
			$sql = "DELETE FROM products WHERE id = '$this->id' " ;
			$stmt	 = $this->prepare($sql);
			$deleted = $stmt->execute();
			if ($deleted == true) {
				unlink('../../../assets/upload/');
				$_SESSION['pomsg'] = "Succesfully deleted";
				header('Location:index.php');
			}

			//For file unlink
			$sql  = "SELECT * FROM products WHERE id='$this->id'";
			$stmt = $this->prepare($sql);
			$stmt->execute();
			$data = $stmt->fetch();
			$image = "../../../assets/upload/".$data['img'];

			return $image;

		}	



}