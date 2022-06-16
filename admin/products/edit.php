<?php
include_once ('../../vendor/autoload.php');
use App\admin\products\Products;
use App\admin\category\Category;

$objproducts = new Products;

$data = $objproducts->setData($_GET)->show();





$objcategory = new Category;

$allcat = $objcategory->index();


include_once('../header.php');
  
?>


     <!-- Aside Left sidebar start -->
    <aside id="leftsidebar" class="leftsidebar">
            <nav class="leftsidebar-menu">
                <ul>
                    <li class="active"><a href="../index.php"><i class="fas fa-tachometer-alt"></i>dashboard</a></li>
                    <li class="menu-dropdown open">
                        <a href="#">Product Books
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-sidebar">
                             <li><a href="../products/create.php">Product Create</a></li>                        
                            <li><a href="../products/index.php">Product list</a></li>
                       
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">Add Category
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-sidebar">
                             <li><a href="../category/create.php">Category Create</a></li>                        
                            <li><a href="../category/index.php">Category list</a></li>
                           
                        </ul>
                    </li>
                    
                     <li class="menu-dropdown">
                        <a href="#">Authors
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-sidebar">
                             <li ><a href="../authors/create.php">New Authors Create</a></li>                        
                            <li ><a href="../authors/index.php">New Authors list</a></li>
                      
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">Request A Book
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-sidebar">
                                                    
                            <li><a href="../request/index.php">Request  list</a></li>
                           
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">Contact
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-sidebar">
                                                    
                            <li><a href="../contact/index.php">Contact list</a></li>
                        
                        </ul>
                    </li>
                    
                   
                    
                </ul> 
            </nav> 
    </aside>
    <!-- Aside Right Sidebar End -->

   <!-- Section Content Start -->
    <div class="section-content">
        <!-- Section Title Start -->
        <section class="section-title">
            <div class="content-title">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Bestsellers
                                <small>Welcome to BookStore Online</small>
                            </h2>
                        </div>
                        <div class="col-md-6">    
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bestsellers</li>
                              </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Title End -->
        <!-- Default Form -->
        <section class="section-default-form">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="default-form">
                            <div class="form-title">
                                    <h3>BestSellers Create Form</h3>
                                </div>
                            <div class="form-content">
                                 <?php
                    if(!isset($_SESSION['pomsg'])){
                      echo "<h5>Please add your portfolios here .</h5>";

                    }else{//Show Succesfull message
                        echo "<h5 class='text-success'>".$_SESSION['pomsg']."</h5>"; 
                        unset($_SESSION['pomsg']);  
                  } ?>
                                
                            <form method="POST" action="update.php"  enctype="multipart/form-data">
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="cat"></label>
                                        <select name="cat" id="category">
                                            <option>Select Category</option>
                                            <?php

                                                if($allcat){
                                                    foreach ($allcat as $datas) {
                                                        ?>
                                                    <option value="<?php echo $datas['id']; ?>">

                                                        <?php echo $datas['name']; ?>
                                                        </option>

                                                    <?php    
                                                    }
                                                }
                                            ?>
                                            
                                        </select>
                                    </div>
                                </div>
                              <div class="form-row">
                                <div class="form-group form-line col-md-12">
                                  <label for="inputEmail4">Title</label>
                                  <input type="text" name="title" value="<?php echo $data['title']; ?>" class="form-control" id="inputEmail4" placeholder="Title" />
                                </div>
                                <div class="form-group form-line col-md-6">
                                  <label for="inputPassword4">Old Price</label>
                                  <input type="text" name="oldprices" value="<?php echo $data['oldprices']; ?>" class="form-control" id="inputPassword4" placeholder="Old Price" />
                                </div>
                                <div class="form-group form-line col-md-6">
                                  <label for="inputPassword5">Price</label>
                                  <input type="text" name="prices" value="<?php echo $data['prices']; ?>" class="form-control" id="inputPassword5" placeholder="Price" />
                                </div>
                              </div>

                              <div class="form-row">
                               
                                <div class="form-group form-line col-md-6">
                                  <label for="inputPassword4">Author Name</label>
                                  <input type="text" name="authors" value="<?php echo $data['authors']; ?>"  class="form-control" id="inputPassword4" placeholder="Author Name" />
                                </div>
                                <div class="form-group form-line col-md-6">
                                  <label for="inputPassword5">Picture Upload</label>
                                  <input type="file" name="img"  class="form-control" id="inputPassword5" />

                  <img style="margin-top: 15px;" width="90" height="70" src="../../assets/upload/<?php echo $data['img']; ?>" alt="No Image">
                                </div>
                              </div>
                                  <div class="form-group">
                                    <label for="description">Book Description</label>
                                    <textarea name="description" class="form-control" id="description" rows="3" placeholder="Write Book Details" /><?php echo $data['description']; ?></textarea>
                                  </div>
                             
                                    <?php //Show empty message
                                      if(isset($_SESSION['pofail'])){ 
                                          echo "<h5 class='text-danger'>".$_SESSION['pofail']."</h5>"; 
                                          unset($_SESSION['pofail']); 
                                    } ?>
                              <input class="input-xs" type="hidden" value="<?php echo $data['id']; ?>" name="id">      
                              <input type="submit" value="Upload" />
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Default Form End -->
    </div>
    <!-- Section Content End -->


<?php

include_once('../footer.php');

?>