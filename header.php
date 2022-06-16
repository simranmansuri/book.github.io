<?php

include_once ('vendor/autoload.php');

use App\admin\products\Products;
use App\admin\authors\Authors;
use App\admin\category\Category;
use App\frontview\Cart;

// New Release 
$objauthors = new Authors;
$allDataauthors = $objauthors->index();

// Bestsellers
$objproducts = new Products;
$objcategory1 = $objproducts->index();
$allDatawidget = $objproducts->widget();


// Category
$objcategory = new Category;
$objcategories = $objcategory->index();


// Cart
$objcart = new Cart;
$objcartlist = $objcart->index();

  
?>

<!DOCTYPE html>
<html>
<head>
    <title>new Book Store Online</title>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="assets/frontend/css/swiper.min.css">
<link rel="stylesheet" href="assets/frontend/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/frontend/css/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/frontend/css/owl.theme.green.min.css">
<link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/frontend/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/frontend/flaticon/flaticon.css">
<link rel="stylesheet" href="assets/frontend/css/lightcase.css">
<link rel="stylesheet" href="assets/frontend/css/rating.css">
<link rel="stylesheet" href="assets/frontend/css/style.css">
<link rel="stylesheet" href="assets/frontend/css/responsive.css">
</head>

<body>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="hidden-xs-up col-sm-6 col-md-6">
                    <div class="row">
                        <div class="header-top-left">
                            <p>Welcome to Bookshop online Store</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="row">
                        <div class="header-top-right">
                            <div class="header-top-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                          

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="header-middle-item">
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <div class="header-middle-left">
                                <a href="index.php"><img class="img-responsive" src="assets/frontend/images/logo.png"></a>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-9">
                            <div class="row">
                                <div class="header-middle-left">
                                  <form action="search.php" method="GET">
                                      <input type="search" name="keyword" placeholder="Title,Author">
                                      <input type="submit" value="Search">
                                  </form>
                                </div>
                                <div class="header-middle-right">
                                    <ul>
                                        <li>
                                            <div class="header-middle-right-icon">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                            <div class="header-middle-right-text">
                                                <p><a href="product-cart.html">Add cart</a></p>
                                                <p>Item: 0</p>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>


                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class=" active">
                                <a href="index.php">HOME<span class="sr-only">(current)</span></a>
                               
                            </li>
                             <?php foreach ($objcategories as $ratinglist) {  ?>
                            <li >
                                <a href="products-list.php?id=<?php echo $ratinglist['id'];?>"> <?php echo $ratinglist['name']; ?></a>
                                
                            </li>
                            
                            <?php } ?>
                            <li >
                                <a href="author-list.php">Our Authors</a>
                                
                            </li>
                            <li >
                                <a href="request-book.php" >request a book</a>
                               
                            </li>
                            <li><a href="contact.php">CONTACT</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-->
        </nav>
    </div>
</header>