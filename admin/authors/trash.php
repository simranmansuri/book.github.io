<?php 
include_once ('../../vendor/autoload.php');
use App\admin\authors\Authors;

$objauthors = new Authors;

if (isset($_GET['id'])) {
	$objauthors->setData($_GET)->softDelete();
}