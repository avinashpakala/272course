 <!--====== CONTACT PART START ======-->
 <!DOCTYPE html>
  <html>
  
  <body>
 <div id="contact" class=" pt-100 pl-115 " style="width: 60rem;">
 <div class="card-body">
  
    <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-30">
                        <h5 class="mb-15">Contact Us</h5>
                        <h3 class="title mb-15">Feel free to talk to us.</h3>
                    </div> <!-- section title -->
                </div>
            </div>
  </div>
 <table class="mx-auto table table-hover">
 <caption></caption>

  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>  
      <th scope="col">Phone </th>
      <th scope="col">Email </th>
      <th scope="col">Role </th>

    </tr>
  </thead>
  <tbody>
  <?php
    $file = file("./contacts.txt"); 
    
    foreach( $file as $row)
       { $array = explode(",", $row);
        print_r("<tr> 
        <td>". $array[0]."</td>
        <td>". $array[1] ."</td>
        <td>" .$array[2] . "</td>  
        <td>" .$array[3] . "</td>  
        <td>" .$array[4] . "</td>  
               </tr>")  ;
    }
  
  ?>
</tbody>
</table>
</div>
 </body>

 </html>

    <!--====== CONTACT PART ENDS ======-->