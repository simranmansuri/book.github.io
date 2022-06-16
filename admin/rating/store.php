<?php 
include_once ('../../vendor/autoload.php');
use App\admin\rating\Rating;

$objrating = new Rating;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	if ($_POST['proid']=='' AND $_POST['name']==''AND $_POST['email']==''AND $_POST['message']==''AND $_POST['example']=='' ) {

		$_SESSION['ffail'] = "Fields are required!";
			header('Location:../../product-single.php');
				exit();
	}
	else{

		$objrating->setData($_POST)->store();

	}
}

