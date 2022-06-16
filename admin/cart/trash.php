<?php 
include_once ('../../vendor/autoload.php');
use App\frontview\Cart;

$objcart = new Cart;

if (isset($_GET['id'])) {
	$objcart->setData($_GET)->softDelete();
}