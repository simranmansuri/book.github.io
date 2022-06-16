<?php include_once('header.php'); ?>
 

 
<section class="slider-about">
    <div class="slider-about-text">
        <?php 
            $id = $_GET['id'];
            $objcatlist = $objcategory->showname($id);; 
        ?>
        <h3>all <?php echo $objcatlist['name']; ?> list</h3>
        <ul>
            <li>home<span>/</span></li>
            <li><?php echo $objcatlist['name']; ?> list</li>
        </ul>
    </div>
</section>
<section class="courses-header">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <h3>all <?php echo $objcatlist['name']; ?> list</h3>
                    <div class="courses-categories">
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="popular">
    <div class="container">
        <div class="row">
            <div class="row">
                    <?php 
                    $id = $_GET['id'];


                    $objprolist  = $objproducts->catsingle($id); ?>
                
                  <?php foreach ($objprolist as $data) {  ?>
                  
                <div class="col-sm-6 col-md-4 popular-course">
                    <div class="popular-text">
                        <div class="popular-image">
                            <a href="#">
                                <img alt="coomingsoon" src="assets/upload/<?php echo $data['img']; ?>">
                            </a>
                        </div>
                        <div class="courses-text">
                            <div class="course-text-author">
                                <div class="course-text-author-pic">
                                   
                                    <a href="#"><h4><?php echo $data['authors']; ?></h4></a>
                                    
                                </div>
                                <div class="course-text-author-text">
                                    <a href="#"><h4><?php echo $data['title']; ?></h4></a>
                                    <P><?php echo substr($data['description'], 0, 100); ?></P>
                                </div>
                            </div>
                            <div class="course-text-bottom">
                                <p>$<?php echo $data['prices']; ?></p>
                               
                                <a href="product-single.php?id=<?php echo $data['id'];?>">Add to Cart<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>




<?php include_once('footer.php'); ?>