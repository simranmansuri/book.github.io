<?php include_once('header.php'); ?>

<section class="slider-section">
      <div class="slider">
       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
 <div class="carousel-inner" role="listbox">
    <div class="item active slider-position">
       <div class="slider-image">
        <img class="img-responsive" src="assets/frontend/images/slider1.jpeg" alt="slider-image">
       </div>
       <div class="slider-desc">
         <div class="container">
          <div class="row">
              <div class=" col-sm-8 col-md-8">
               <div class="slide-text slide-text2">
                 <h3>You can buy everything our bookstore</h3>
                 <h2>Buy best book from online</h2>
                 <P>this is our book store we are collected lots of books.</P>
                
               </div>
             </div>
            </div>
          </div>
       </div>
    </div>
     <div class="item  slider-position">
       <div class="slider-image">
        <img class="img-responsive" src="assets/frontend/images/slider2.jpeg" alt="slider-image">
       </div>
       <div class="slider-desc">
         <div class="container">
          <div class="row">
              <div class="col-sm-8 col-md-8">
               <div class="slide-text slide-text2">
                 <h3>You can buy everything our bookstore</h3>
                 <h2>Buy best book from online</h2>
                 <P>this is our book store we are collected lots of books.</P>
                
               </div>
             </div>
            </div>
          </div>
       </div>
    </div>
     <div class="item slider-position">
       <div class="slider-image">
        <img class="img-responsive" src="assets/frontend/images/slider3.jpeg" alt="slider-image">
       </div>
       <div class="slider-desc">
         <div class="container">
          <div class="row">
              <div class=" col-sm-8 col-md-8">
               <div class="slide-text slide-text2">
                 <h3>You can buy everything our bookstore</h3>
                 <h2>Buy best book from online</h2>
                 <P>this is our book store we are collected lots of books.</P>
                
               </div>
             </div>
            </div>
          </div>
       </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <i class="fa fa-angle-left"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <i class="fa fa-angle-right"></i>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
</section>


<?php 
foreach ($objcategories as $data) { 

?>
<section class="shop">
	 <div class="section-header section-header1">
          <div class="container">
            <div class="col-md-12">
              <div class="row">
                <h2><?php  echo $data['name']; ?></h2>
              </div>
            </div>
          </div>
    </div>      
	<div class="container">
		<div class="row">
            <div class="row">
                <div class="shop-info">
                <?php
                    $objprolist  = $objproducts->catsingle($data['id']);


                    
                    
                    foreach ($objprolist as $list) {  



                      ?>



                    <div class="col-sm-4 col-md-2">
                        <div class="shop-details">
                            <div class="shop-img">
                                <a href="#"><img alt="coomingsoon" src="assets/upload/<?php echo $list['img']; ?>"></a>
                            </div>
                            <div class="shop-text-main">
                                <div class="shop-title-main">
                                    <a href="#"><h3><?php echo $list['title']; ?></h3></a>
                                    <div class="shop-price-main">
                                        <del>$<?php echo $list['oldprices']; ?></del>
                                        <span>$<?php echo $list['prices']; ?></span>
                                        <p><?php echo $list['authors']; ?></p>
                                    </div>
                                </div>
                                <div class="shop-cart-main">
                                    <a href="product-single.php?id=<?php echo $list['id'];?>">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                  <?php } ?>

                </div>
            </div>


		</div>
	</div>
</section>
<?php } ?>



<?php include_once('footer.php'); ?>