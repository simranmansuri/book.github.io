<?php


include_once ('../../vendor/autoload.php');
use App\admin\category\Category;

$objcategory = new Category;

$allData = $objcategory->index();

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
                             <li><a href="../category/create.php">Category Create</a></li>                        
                            <li class="active"><a href="../category/index.php">Category list</a></li>
                           
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
                            <h2>Category
                                <small>Welcome to thesoftking application</small>
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
        <!-- Table Design Start -->
        <section class="table-section section-padding">
            <div class="container-fluid">
                <div class="row">
                    <!-- Table Header Style Start -->
                    <div class="col-lg-12">
                        <div class="table-design">
                            <div class="table-header">
                                <h3>Category All Data Table</h3>
                            </div>
                            <div class="table-content striped-content table-responsive">
                                <table class="table ">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">Name</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
							
							

									 <?php 
										$i = 0;
										foreach ($allData as $data) { $i++; ?>

                                    <tr>
                                      <td scope="row"><?php echo $i; ?></td>
                                      <td scope="row"><?php echo $data['name']; ?></td>

                                      <td scope="row">
                                      <a href="edit.php?id=<?php echo $data['id'];?>"  data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a> 

                                      <a onclick="return confirm('Do you want to delete it?');" href="trash.php?id=<?php echo $data['id'];?>"  data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-window-close"></i></a>
                                      </td>

                                    </tr>
                                    
                                     <?php } ?>
                                    
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Table Header Style End -->
                </div>
            </div>
        </section>
        <!-- Table Design End -->

    </div>
    <!-- Section Content End -->  

<?php
include_once('../footer.php');
?>