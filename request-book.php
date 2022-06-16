<?php include_once('header.php'); ?>

<section class="slider-about">
    <div class="slider-about-text">
        <h3>Request a Book</h3>
        <ul>
            <li>home<span>/</span></li>
            <li>request Book</li>
        </ul>
    </div>
</section>
<section class="add-contact">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <div class=" contact-us">
                        <div class="add-review-list add-contact-list">
                            <form action="admin/request/store.php" method="post">
                             
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text"  placeholder="Your Name*" name="name"/>
                                        <input type="email"  placeholder="Email" name="email"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="url"  placeholder="Website Link" name="url"/>
                                        <input type="text"  placeholder=" Book Title" name="books"/>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea  name="description" placeholder="Message"></textarea>
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

<?php include_once('footer.php'); ?>