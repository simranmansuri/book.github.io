<?php 
include_once ('../../vendor/autoload.php');
use App\admin\products\Products;

$obproducts = new Products;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	if ($_POST['description']==''AND $_POST['authors']==''AND $_POST['title']==''AND $_POST['oldprices']==''AND $_POST['prices']==''AND $_POST['cat']=='' ) {

		$_SESSION['ffail'] = "Fields are required!";
			header('Location:create.php');
				exit();
	}else{

			if (!empty($_FILES['img']['name'])) {

				$alow    = array('jpg','jpeg','png');    
				$file_name      = $_FILES['img']['name'];    
				$file_size      = $_FILES['img']['size'];     
				$file_path      = $_FILES['img']['tmp_name'];    
				$explodeExt      = explode('.', $file_name);    
				$file_ext   = strtolower(end($explodeExt));    
				$file_unique_name = substr(md5(time()), 0,7).'.'.$file_ext;    
				$file_storage ="../../assets/upload/".$file_unique_name;

			if(in_array($file_ext , $alow )===false) {         
				$_SESSION['pofail'] = "You can upload only ".implode(", ", $alow); 				
				header('Location:edit.php');
    
			}else{ 
				 move_uploaded_file($file_path , $file_storage);
				 $_POST['img'] = $file_unique_name;

				 $obproducts->setData($_POST)->update();
			}
		}
		else{
			$obproducts->setData($_POST)->update();
		}
	}
}

