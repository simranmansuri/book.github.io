<?php 
include_once ('../../vendor/autoload.php');
use App\admin\contacts\Contact;

$objcontact = new Contact;

if (isset($_GET['id'])) {
	$objcontact->setData($_GET)->softDelete();
}