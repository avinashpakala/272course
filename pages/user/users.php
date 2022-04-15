 <!--====== CONTACT PART START ======-->
 <!DOCTYPE html>
  <html>
  
  <body>
 <div id="contact" class=" pt-100 pl-115 " style="width: 60rem;">
 <div class="card-body">
  
    <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-30">
                        <h5 class="mb-15">View </h5>
                        <h3 class="title mb-15">Users List</h3>
                    </div> <!-- section title -->
                </div>
            </div>
  </div>
  <form method ="post">
  <div class="form-group mb-3"  >
	<label class="label" for="Search">Search</label>
			<input type="text" name="search" class="form-control"  placeholder="Search by firstname or lastname or email or homephone or cellphone" >
		</div>
<input type="submit" >
</form>
                
 <table class="mx-auto table table-hover">
 <caption></caption>

  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>  
      <th scope="col">Email </th>
      <th scope="col">Home Address </th>
      <th scope="col">Home Phone </th>
      <th scope="col">Cell Phone </th>



    </tr>
  </thead>
  <tbody>
  <?php
    getUsers();
   

    function getUsers(){
        require_once('vendor/autoload.php');
            
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        
        $cleardb_url = parse_url($_ENV["CLEARDB_DATABASE_URL"]);
        
        $cleardb_server = $cleardb_url["host"];
        $cleardb_username = $cleardb_url["user"];
        $cleardb_password = $cleardb_url["pass"];
        $cleardb_db = substr($cleardb_url["path"],1);
        $active_group = 'default';
        $query_builder = TRUE;

        // Connect to DB
        $conn = new mysqli($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
        
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        if(isset($_POST['search']))
      { $search = $_POST['search'];
        echo 'Searching users with firstname or lastname or email or homephone or cellphone starting with ' . $search;

        $sql = "SELECT * FROM users WHERE (firstname LIKE '$search%')  or (lastname LIKE '$search%') or (email LIKE '$search%')or (homePhone LIKE '$search%') or (cellPhone LIKE '$search%')";}
        else {
          $sql = "SELECT * FROM users ";
        }
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            print_r("<tr> 
            <td>". $row["firstname"]."</td>
            <td>". $row["lastname"] ."</td>
            <td>" .$row["email"] . "</td>  
            <td>" .$row["homeaddress"] . "</td>  
            <td>" .$row["homePhone"] . "</td>  
            <td>" .$row["cellPhone"] . "</td>  

                   </tr>")  ;
          }
        } else {
          echo "0 results";
        }
        $conn->close();
    }
  
  ?>
</tbody>
</table>
</div>
 </body>

 </html>

    <!--====== CONTACT PART ENDS ======-->