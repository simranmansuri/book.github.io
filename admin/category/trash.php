<?php 
include_once ('../../vendor/autoload.php');
use App\admin\category\Category;

$objcategory = new Category;

if (isset($_GET['id'])) {
	$objcategory->setData($_GET)->softDelete();
}