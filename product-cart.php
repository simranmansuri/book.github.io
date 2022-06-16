<?php include_once('header.php'); ?>

<section class="slider-about">
    <div class="slider-about-text">
        <h3>book cart </h3>
        <ul>
            <li>home<span>/</span></li>
            <li>Book cart page</li>
        </ul>
    </div>
</section>
<section class="product-chart">
    <div class="container">
        <div class="row">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                  <form action="#">
                      <div class="table-responsive">
                          <div class="product-cart-list">
                              <table class="shop-cart">
                                  <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>Title</th>
                                      <th>Prices</th>
                                      <th>Images</th>
                                      <th>Quantity</th>
                                      <th>Total</th>
                                      <th>Delete</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  
                   <?php 
                    $i = 0;
                    $sum = 0;
                    foreach ($objcartlist as $data) { $i++; ?>

                                    <tr>
                                      <td scope="row"><?php echo $i; ?></td>
                                     
                                      <td scope="row"><?php echo $data['title']; ?></td>
                                      
                                      <td scope="row"><?php echo $data['prices']; ?></td>
                                    
                                     
                                      <td scope="row"><img width="90px" height="70" src="assets/upload/<?php echo $data['img']; ?>"> </td>
                                      <td scope="row"><?php echo $data['quantity']; ?></td>

                                      <td scope="row"><?php $total = $data['prices'] * $data['quantity'];
                                             echo $total; ?></td>

                                      


                                      <td scope="row">
                                      

                                      <a onclick="return confirm('Do you want to delete it?');" href="admin/cart/trash.php?id=<?php echo $data['id'];?>"  data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
                                      </td>

                                    </tr>
                                    

                                     <?php $sum = $sum + $total;  } ?>
                                  
                                 
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </form>
              </div>
            </div>
        </div>
    </div>
</section>
<section class="coupon">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                <div class="coupon-price">
                        <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-6">
                                 <div class="cart-total">
                                     <h3>cart totals</h3>
                                     <div class="cart-total-list">
                                         <div class="cart-subtotal">
                                             <p>Cart Subtotal</p>
                                             <span>$<?php echo $sum; ?></span>
                                         </div>
                                         <div class="cart-subtotal">
                                             <p>Shipping </p>
                                             <span>Free Shipping</span>
                                         </div>
                                         <div class="cart-subtotal">
                                             <p>Order Total</p>
                                             <span>$<?php echo $sum; ?></span>
                                         </div>

                                     </div>
                                 </div>
                            </div>
                        </div>
                        </form>
                    </div>
                   <div class="coupon-list">
                       <form action="#">
                           <div class="coupon-left">
                               <input  type="text" name="coupon" placeholder="Coupon Code" >
                               <a href="#">apply coupon</a>
                           </div>
                           <div class="coupon-right">
                              
                               <a href="#">proceed to checkout</a>
                           </div>
                       </form>
                   </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once('footer.php'); ?>