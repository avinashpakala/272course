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
    case '/user':
        require __DIR__ . '/pages/user/users.php';
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

