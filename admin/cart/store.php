<?php 
include_once ('../../vendor/autoload.php');
use App\frontview\Cart;

$objcart = new Cart;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	if ($_POST['quantity']==''AND $_POST['proid']=='' AND $_POST['title']==''AND $_POST['prices']=='' AND $_POST['img']=='' ) {

		$_SESSION['ffail'] = "Fields are required!";
			header('Location:../../product-cart.php');
				exit();
	}
	else{

		$objcart->setData($_POST)->store();

	}
}

