<?php 
namespace App\frontview;
use App\database\Database;
/**
* Class for view user data in front side
*/
class Search extends Database{

	private $keyword = '';
	private $userId = '';

	
	function __construct(){
		parent::__construct();
	}

		public function setData($data = ''){
			if (!empty($data)) {
				if(array_key_exists('keyword',$data) AND !empty($data['keyword'])){
				$this->keyword = filter_var($data['keyword'],FILTER_SANITIZE_STRING); 
				}

			}
		return $this;

	}


	public function getSearchResult(){



		 try {



$query =  "SELECT DISTINCT * FROM products WHERE title LIKE '%$this->keyword%' or authors LIKE '%$this->keyword%' 
          
          



			"; 



            $stmt = $this->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } 

        catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage('hello');
        }

	}

			

}	
