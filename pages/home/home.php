<!DOCTYPE html>

    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <!-- <img src="assets/images/logo.png" alt="Logo"> -->
                        </a> <!-- Logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a data-scroll-nav="0" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#about">About Us</a>
                                </li>
                              
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="/product">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#blog">News</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="/login">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="/createuser">Create User</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="/user">View user</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="/allusers">Combined users list</a>
                                </li>
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    
    <!--====== HEADER PART ENDS ======-->
      
    <?php
        include "pages/home/slider.php";
        include "pages/home/about-us.php";
        include "pages/home/products.php";
        include "pages/home/news.php";
    ?>


    
    <!--====== BACK TO TOP PART START ======-->
    
    
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
    
    
    
    
   
    
    
    
    
    
    

