<?php

session_start();
include_once ('vendor/autoload.php');


use App\admin\products\Products;
use App\admin\rating\Rating;
use App\frontview\Cart;

// Products
$objproducts = new Products;
$objprosingle = $objproducts->setData($_GET)->show();


$objcart = new Cart;

// Rating
$objrating = new Rating;
$objratinglist = $objrating->index();


?>






<?php @include_once('header.php'); ?>


<section class="slider-about">
    <div class="slider-about-text">
        <h3>Book single page</h3>
        <ul>
            <li>home<span>/</span></li>
            <li>Book single</li>
        </ul>
    </div>
</section>
<section class="course-content">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <div class="prduct-position">
                        <div class=" col-sm-6 col-md-6">

                                       <img src="assets/upload/<?php echo $objprosingle['img']; ?>" alt="No Image">
                             
                        </div>
                        <div class="col-md-6 ">
                            <div class="product-info">
                                <div class="product-info-header">
                                   
                                    <h3><?php echo $objprosingle['title']; ?></h3>
                                    <p><del>$<?php echo $objprosingle['oldprices']; ?></del>$ <?php echo $objprosingle['prices']; ?></p>
                                </div>
                                <div class="product-info-desc">
                                    <h4>product description</h4>
                                    <p>
                                        <?php echo $objprosingle['description']; ?>
                                    </p>
                                </div>
                                <div class="product-info-select">
                                    
                                    <div class="center center-select">
                                       
                                    
                                    <form action="admin/cart/store.php" method="post">
                                        <input type="number" name="quantity" class="form-control input-number" value="1" min="1" max="10">

                                        <input type="hidden" name="proid" value="<?php echo $objprosingle['id']; ?>">
                                        <input type="hidden" name="title" value="<?php echo $objprosingle['title']; ?>">

                                        <input type="hidden" name="prices" value="<?php echo $objprosingle['prices']; ?>">
                                        <input type="hidden" name="img" value="<?php echo $objprosingle['img']; ?>">

                                    <button class="product-submit" type="submit" name="submit">add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                    <div class="reviews-count">
                        <h3><span>REVIEWS</span></h3>
                        <div class="reviews-count-info">
                            <h3>custom reviews</h3>
                <?php foreach ($objratinglist as $ratinglist) {  ?>
                            <div class="reviews-count-list">
                               
                                <div class="reviews-count-text">
                                    <div class="reviews-count-title product-review-list">
                                        <h4><?php echo $ratinglist['name']; ?></h4>
                                        <p>Posted on <?php echo $ratinglist['created_at']; ?></p>
                                        <ul>
                                        <?php
                                            $reviews = $ratinglist['rating'];
                                            for($i = 0;$i<$reviews;$i++){
                                        ?>        
                                            <li><i class="fa fa-star"></i></li>
                                           <?php } ?>
                                        </ul>

                                    </div>
                                    <p>
                                        <?php echo $ratinglist['description']; ?>
                                    </p>
                                </div>
                            </div>

                            <?php } ?>
                            

                        </div>
                    </div>
                </div>
                 <div class="col-md-12">
                    <div class="add-review">
                        <h3>REVIEWS</h3>
                        <div class="add-review-list ">
                            <form action="admin/rating/store.php" method="post">
                                 <?php
                    if(!isset($_SESSION['pomsg'])){
                      echo "<h5> </h5>";

                    }else{//Show Succesfull message
                        echo "<h5 class='text-success'>".$_SESSION['pomsg']."</h5>"; 
                        unset($_SESSION['pomsg']);  
                  } ?>
                                <div class="row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text"  placeholder="Your Name*" name="name"/>
                                            <textarea  name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="input-color" placeholder="Your Email*" name="email"/>
                                            <div class="add-rating">
                                                <p>Your Rating</p>
                                                <div id="star-rating">
                                                    <input type="radio" name="example" class="rating" value="1" />
                                                    <input type="radio" name="example" class="rating" value="2" />
                                                    <input type="radio" name="example" class="rating" value="3" />
                                                    <input type="radio" name="example" class="rating" value="4" />
                                                    <input type="radio" name="example" class="rating" value="5" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" name="proid" value="<?php echo $objprosingle['id']; ?>">


                                    <?php //Show empty message
                                      if(isset($_SESSION['ffail'])){ 
                                          echo "<h5 class='text-danger'>".$_SESSION['ffail']."</h5>"; 
                                          unset($_SESSION['ffail']); 
                                    } ?>
                                    <button type="submit">POST SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                 </div>
                </div>

               
        </div>
    </div>
</section>
<?php include_once('footer.php');?>