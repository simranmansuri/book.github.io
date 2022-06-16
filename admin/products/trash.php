<?php 
include_once ('../../vendor/autoload.php');
use App\admin\products\Products;

$objproducts = new Products;

if (isset($_GET['id'])) {
	$objproducts->setData($_GET)->softDelete();
}