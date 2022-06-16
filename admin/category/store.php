<?php 
include_once ('../../vendor/autoload.php');
use App\admin\category\Category;



$objcategory = new Category;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	if ($_POST['category']=='' ) {

		$_SESSION['ffail'] = "Fields are required!";
			header('Location:create.php');
				exit();
	}
	else{



		$objcategory->setData($_POST)->store();

	}
}

