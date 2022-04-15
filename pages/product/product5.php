<!DOCTYPE html>
  <html>
  <?php
    function clickProduct($productNo){
        addTolastfive($productNo);
        counter($productNo);
    }
    function addTolastfive($productNo){
        // $val=array(1,3,4,5,9);
        if(!isset($_COOKIE['lastseen'])) {
        $lastseen = array($productNo);
        $ar=json_encode($lastseen);
        setcookie('lastseen', $ar, time() + (86400 * 30), "/");
     
        }
        else
        {$lastseencookie=$_COOKIE['lastseen'];
        $lastseen= json_decode($lastseencookie, true);
       
        if (in_array($productNo, $lastseen)){
            foreach ($lastseen as $key => $value){
                if ($value == $productNo) {
                    unset($lastseen[$key]);
                }
            }
        }
        if (sizeof($lastseen) == 5){
            array_pop($lastseen);
        }
        array_unshift($lastseen,$productNo);
        $ar=json_encode($lastseen);
        setcookie('lastseen', $ar, time() + (86400 * 30), "/");
    }
    }
    function counter($productNo){
 // $val=array(1,3,4,5,9);
 if(!isset($_COOKIE['counter'])) {
    $counter = array($productNo => 1);
    $ar=json_encode($counter);
    setcookie('counter', $ar, time() + (86400 * 30), "/");
 
    }
    else
    {$countercookie=$_COOKIE['counter'];
    $counter= json_decode($countercookie, true);
    if (array_key_exists($productNo, $counter)){
        $counter[$productNo] =  $counter[$productNo] + 1;
    }
    else {
        $counter[$productNo] = 1;
    }
   
    $ar=json_encode($counter);
    setcookie('counter', $ar, time() + (86400 * 30), "/");
   
}
    }
   
    clickProduct(5)
   
?>
 <div class="tab-pane fade show active" id="v-pills-furniture" role="tabpanel" aria-labelledby="v-pills-furniture-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="/product5" ><img src="assets/images/product/10.png" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div   class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a >product5</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                
                                                <span class="regular-price">$49.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <!-- single product items -->
                                    <div>
                                    <span>
                                    Superior Quality and very high in demand
                                    Buy this product now
                                    </span>
                                    </div>
                                    </div>
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- 

</html>