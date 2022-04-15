<?php 

function topfive(){
    if(!isset($_COOKIE['counter'])) {
        print_r('Not clicked');
        }
 else{
    $countercookie=$_COOKIE['counter'];
    $counter= json_decode($countercookie, true);
    arsort($counter);
    $newArray = array_slice($counter, 0, 5, true);
    echo "The top five products seen is: \n" ."<br>";
    //Prints the array
    foreach($newArray as $key => $value){
        echo "Product" . $key . " is seen " . $value ." times \n" ."<br>";
    }
}
}
topfive();
?>