<?php 
include_once ('../../vendor/autoload.php');
use App\admin\contacts\Contact;

$objcontact = new Contact;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	if ($_POST['name']==''AND $_POST['email']==''AND $_POST['phone']==''AND $_POST['subject']==''AND $_POST['msg']=='' ) {

		$_SESSION['ffail'] = "Fields are required!";
			header('Location:create.php');
				exit();
	}
	else{

		$objcontact->setData($_POST)->store();

	}
}

