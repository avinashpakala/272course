<!DOCTYPE html>
<html>
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
   
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
    
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="assets/css/responsive.css">
  
  
</head>   

<?php
 $request = $_SERVER['REQUEST_URI'];

 switch ($request) {
     case '':
     case '/':
         require __DIR__ . '/pages/home/index.php';
         break;
 
     case '/contact?':
         require __DIR__ . '/pages/contact/contact.php';
         break;
        case '/product':
        require __DIR__ . '/pages/product/product.php';
        break;    
        case '/product1':
        require __DIR__ . '/pages/product/product1.php';
        break; 
        case '/product2':
                require __DIR__ . '/pages/product/product2.php';
                break;
        case '/product2':
              require __DIR__ . '/pages/product/product2.php';
               break;
        case '/product3':
                require __DIR__ . '/pages/product/product3.php';
                break;
        case '/product4':
        require __DIR__ . '/pages/product/product4.php';
        break;
        case '/product5':
        require __DIR__ . '/pages/product/product5.php';
        break;
        case '/product6':
                require __DIR__ . '/pages/product/product6.php';
                break;
        case '/product7':
                require __DIR__ . '/pages/product/product7.php';
                break;
        case '/product8':
                require __DIR__ . '/pages/product/product8.php';
                break;
        case '/product9':
                require __DIR__ . '/pages/product/product9.php';
                break;
        case '/product10':
                require __DIR__ . '/pages/product/product10.php';
                break;         
    case '/latestfive':
                require __DIR__ . '/pages/product/latestfive.php';
                break; 
    case '/topfive':
                require __DIR__ . '/pages/product/topfive.php';
                break; 
    case '/user':
        require __DIR__ . '/pages/user/users.php';
        break;  
    case '/allusers':
        require __DIR__ . '/pages/user/allusers.php';
        break;      
    case '/createuser':
            require __DIR__ . '/pages/user/createUser.php';
            break;    
    case '/postUser':
            require __DIR__ . '/pages/user/postUser.php';
            break;
    case '/login':
            require __DIR__ . '/pages/login/login.php';
            break;
    case '/password':
            require __DIR__ . '/pages/login/password.php';
            break;
    default:
         http_response_code(404);
         require __DIR__ . '/pages/404.php';
         break;
 }

