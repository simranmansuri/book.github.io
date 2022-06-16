<?php


include_once ('vendor/autoload.php');

use App\frontview\Search;



// New Release 
$objsearch = new Search;

if (!empty($_GET['keyword'])) {
        $data= $objsearch->setData($_GET)->getSearchResult();
}else{  
    header("Location:index.php");
}


use App\admin\products\Products;
use App\admin\authors\Authors;


// New Release 
$objauthors = new Products;
$allDataauthors = $objauthors->index();

// New products
$objproducts = new Products;
$allDataproducts = $objproducts->index();
// $allDatawidget = $objproducts->widget();
// $allDatareleasepost = $objproducts->post();


include_once ('header.php');  
?>



<section class="slider-about">
    <div class="slider-about-text">
        <h3>search Page</h3>
        <ul>
            <li>home <span>/</span></li>
            <li>Search Page</li>
        </ul>
    </div>
</section>
<section class="courses-header">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <h3>all Search list</h3>
                    
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

                  
                  
                  <?php foreach ($allDataproducts as $datas) {  ?>
                    <div class="col-sm-6 col-md-3">
                        <div class="shop-details shop-details-list">
                            <div class="shop-img">
                                <a href="#"><img alt="coomingsoon" src="assets/upload/<?php echo $datas['img']; ?>"></a>
                            </div>
                            <div class="shop-text-main">
                                <div class="shop-title-main">
                                    <a href="#"><h3><?php echo $datas['title']; ?></h3></a>
                                    <div class="shop-price-main">
                                        <del>$<?php echo $datas['oldprices']; ?></del>
                                        <span>$<?php echo $datas['prices']; ?></span>
                                        <p><?php echo $datas['authors']; ?></p>
                                    </div>
                                </div>
                                <div class="shop-cart-main">
                                    <a href="product-single.php?id=<?php echo $datas['id'];?>">add to cart</a>
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


<?php include_once('footer.php');?>