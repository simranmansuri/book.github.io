<section class="footer-section">
  <div class="footer">
    <div class="container">
      <div class="row">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="footer-header">
                            <h3>about bookshop</h3>
                        </div>
                        <div class="footer-list">
                            <div class="footer-info">
                                <p>we are selling product from this bookshop and eveyone buy any type of book from the bookshop. we are collecting is very popular books. 
                                </p>
                                <a href="#">read more<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="email">
                                <p>Email Newsletters:</p>
                                <div class="message">
                                    <input type="email" name="email" placeholder="Email Address">
                                    <a href="#">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="col-sm-6 col-md-4">
                        <div class="footer-header">
                            <h3>new Release</h3>
                        </div>
                        <div class="product-list">

                         <?php foreach ($allDatawidget as $data) {  ?>

                            <div class="product-item">
                                <div class="product-img">
                                    <a href="#"><img width="60px" height="70px" alt="coomingsoon" src="assets/upload/<?php echo $data['img']; ?>"></a>
                                </div>
                                <div class="product-price">
                                    <a href="#"><?php echo $data['title']; ?></a>
                                    <p>$<?php echo $data['prices']; ?></p>
                                   
                                </div>
                            </div>

                            <?php } ?>
                           
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-4">
                        <div class="footer-header">
                            <h3>our contact</h3>
                        </div>
                        <div class="footer-list">
                            <div class="footer-contact-desc">
                                <p>Visit Our bookshop </p>
                            </div>
                            <div class="contact">
                                <ul>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span>22/3,example road, example</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <span>+880-5455554</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <span><a href="#">support@example.com</a></span>
                                    </li>
                                </ul>


                            </div>
                            <div class="footer-social">
                                <span>Follow Us:</span>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
      </div>
    </div>
        <div id="back-to-top" class="scroll-top back-to-top">
            <i class="fa fa-angle-up"></i>
        </div>
  </div>
    <div class="footer-bottom">
    <div class="container">
      <div class="row">
            <p>&copy;2018 bookshop copyright</p>
    <div class="footer-bottom-money">
        <a href="#"><i class="flaticon-paypal-logo"></i></a>
        <a href="#"><i class="flaticon-visa-pay-logo"></i></a>
        <a href="#"><i class="flaticon-paypal-logo"></i></a>
        <a href="#"><i class="flaticon-skrill-pay-logo"></i></a>
        <a href="#"><i class="flaticon-payoneer-logo"></i></a>

    </div>
      </div>
    </div>
  </div>
</section>
<!--javascript file link-->




<script src="assets/frontend/js/jquery-3.1.1.min.js"></script>
<script src="assets/frontend/js/jquery.nav.js" ></script>
<script src="assets/frontend/js/lightcase.js"></script>
<script src="assets/frontend/js/swiper.min.js"></script>
<script src="assets/frontend/js/swiper.jquery.min.js"></script>
<script src="assets/frontend/js/bootstrap.min.js"></script>
<script src="assets/frontend/js/owl.carousel.min.js"></script>
<script src="assets/frontend/js/rating.js"></script>
<script src="assets/frontend/js/custom.js"></script>

</body>
</html>