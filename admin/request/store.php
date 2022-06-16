<?php 
include_once ('../../vendor/autoload.php');
use App\admin\request\Request;

$objrequest = new Request;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	if ($_POST['name']==''AND $_POST['email']==''AND $_POST['url']==''AND $_POST['books']==''AND $_POST['description']=='' ) {

		$_SESSION['ffail'] = "Fields are required!";
			header('Location:create.php');
				exit();
	}
	else{

		$objrequest->setData($_POST)->store();

	}
}

