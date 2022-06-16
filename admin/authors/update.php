<?php 
include_once ('../../vendor/autoload.php');
use App\admin\authors\Authors;

$objauthors = new Authors;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	if ($_POST['title']==''AND $_POST['name']=='' ) {

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
				 $objauthors->setData($_POST)->update();
			}
		}
		else{
			$objauthors->setData($_POST)->update();
		}
	}
}

