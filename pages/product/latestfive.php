<?php 
function latestfive(){
    if(!isset($_COOKIE['lastseen'])) {
        print_r('Not clicked any product yet');
        }
 else{

    $lastseencookie=$_COOKIE['lastseen'];
    $lastseen= json_decode($lastseencookie, true);
    //Declare the array
    echo "The latest five products seen is:\n" ."<br>";
    //Prints the array
    foreach($lastseen as $value){
        echo "Product" . $value . "\n" ."<br>";
    }
   }
}
latestfive();

?>