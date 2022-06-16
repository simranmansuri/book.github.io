<?php
if (!isset($_SESSION)) {session_start(); }
include_once('../header.php');
  
?>

     <!-- Aside Left sidebar start -->
    <aside id="leftsidebar" class="leftsidebar">
            <nav class="leftsidebar-menu">
                <ul>
                    <li class="active"><a href="../index.php"><i class="fas fa-tachometer-alt"></i>dashboard</a></li>
                    <li class="menu-dropdown">
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
                    <li class="menu-dropdown open">
                        <a href="#">Add Category
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-sidebar">
                             <li class="active"><a href="../category/create.php">Category Create</a></li>                        
                            <li><a href="../category/index.php">Category list</a></li>
                           
                        </ul>
                    </li>
                    
                     <li class="menu-dropdown ">
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
                            <h2>Category
                                <small>Welcome to BookStore Online</small>
                            </h2>
                        </div>
                        <div class="col-md-6">    
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Category</li>
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
                      echo "<h5>Please add Category here .</h5>";

                    }else{//Show Succesfull message
                        echo "<h5 class='text-success'>".$_SESSION['pomsg']."</h5>"; 
                        unset($_SESSION['pomsg']);  
                  } ?>
                                
                            <form method="POST" action="store.php">
                              

                              <div class="form-row">
                               
                                <div class="form-group form-line col-md-6">
                                  <label for="category">Add Category</label>
                                  <input type="text" name="category" class="form-control" id="category" placeholder="Bestsellers,coomingsoon" />
                                </div>
                              
                              </div>
                                 
                             
                                    <?php //Show empty message
                                      if(isset($_SESSION['pofail'])){ 
                                          echo "<h5 class='text-danger'>".$_SESSION['pofail']."</h5>"; 
                                          unset($_SESSION['pofail']); 
                                    } ?>
                              <input type="submit" value="Add Category" />
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