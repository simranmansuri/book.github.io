<?php include_once('header.php'); ?>

<section class="slider-about">
    <div class="slider-about-text">
        <h3>Best Seller</h3>
        <ul>
            <li>home <span>/</span></li>
            <li>Best Seller</li>
        </ul>
    </div>
</section>
<section class="courses-header">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <h3>all best Seller list</h3>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="shop">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="shop-info">
                    <div class="shop-header">
                        <h3></h3>
                    </div>

                  
                  
                  <?php foreach ($allDataseller as $data) {  ?>
                    <div class="col-sm-6 col-md-3">
                        <div class="shop-details shop-details-list">
                            <div class="shop-img">
                                <a href="#"><img alt="coomingsoon" src="assets/upload/<?php echo $data['img']; ?>"></a>
                            </div>
                            <div class="shop-text-main">
                                <div class="shop-title-main">
                                    <a href="#"><h3><?php echo $data['title']; ?></h3></a>
                                    <div class="shop-price-main">
                                        <del>$<?php echo $data['oldprices']; ?></del>
                                        <span>$<?php echo $data['prices']; ?></span>
                                        <p><?php echo $data['authors']; ?></p>
                                    </div>
                                </div>
                                <div class="shop-cart-main">
                                    <a href="product-single.php?id=<?php echo $data['id'];?>">add to cart</a>
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


<?php include_once('footer.php'); ?>