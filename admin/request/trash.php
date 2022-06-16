<?php 
include_once ('../../vendor/autoload.php');
use App\admin\request\Request;

$objrequest = new Request;

if (isset($_GET['id'])) {
	$objrequest->setData($_GET)->softDelete();
}