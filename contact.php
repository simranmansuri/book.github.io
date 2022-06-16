<?php include_once('header.php');?>

<section class="slider-about">
    <div class="slider-about-text">
        <h3>our contact us</h3>
        <ul>
            <li>home<span>/</span></li>
            <li>contact us</li>
        </ul>
    </div>
</section>
<section class="add-contact">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <div class="add-contact-list">
                        <ul>
                            <li>
                               <div class="contact-icon">
                                  <div class="contact-icon-list">
                                      <i class="fa fa-map-marker"></i>
                                  </div>
                               </div>
                                <p>12/6 , example road</p>
                                <p>example road center</p>

                            </li>
                            <li>
                                <div class="contact-icon">
                                    <div class="contact-icon-list">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <p>+880000000000-office</p>
                                <p>+880100000000-office</p>

                            </li>
                            <li>
                                <div class="contact-icon">
                                    <div class="contact-icon-list">
                                        <i class="fa fa-skype" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <p>Skype/Hello Daniel Somrat.Islam3</p>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <div class="contact-icon-list">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <p>Support@example.com </p>
                                <p>info@Admin name.com</p>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class=" contact-us">
                        <div class="add-review-list add-contact-list">
                            <form action="admin/contact/store.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text"  placeholder="Your Name*" name="name"/>
                                        <input type="email"  placeholder="Email" name="email"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text"  placeholder="Your Phone*" name="phone"/>
                                        <input type="text"  placeholder="Subject" name="subject"/>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea  name="msg" placeholder="Message"></textarea>
                                    </div>
                                    <div class=" col-sm-12 col-md-12 submit-button">
                                        <button type="submit">SUBMIT message</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="map">
    <div class="addMarker">

    </div>

</section>
<?php include_once('footer.php');?>