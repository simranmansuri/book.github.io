<?php
include_once ('header.php');
?>

<section class="slider-about">
    <div class="slider-about-text">
        <h3>our Author</h3>
        <ul>
            <li>home <span>/</span></li>
            <li>Author</li>
        </ul>
    </div>
</section>

<!--MEET OUT TEACHER SECTION START-->
<section class="teacher-section">
    <div>
        <div class="container">
            <div class="row">

             <?php foreach ($allDataauthors as $data) {  ?>

                <div class="col-sm-4 col-md-4 teacher-margin">
                    <div class="teacher-list">
                        <div class="teacher-pic">
                            <a href="#"><img alt="newreleases" src="assets/upload/<?php echo $data['img']; ?>"></a>
                        </div>
                        <div class="teacher-text">
                            <div class="teacher-title">
                                <a href="#"><h4><?php echo $data['name']; ?></h4></a>
                                <p><?php echo $data['title']; ?></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <?php } ?>


            </div>
        </div>

    </div>

</section>


<?php
include_once ('footer.php');
?>