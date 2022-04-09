<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    
    <!-- Fig. 26.16: password.php                          -->
    <!-- Searching a database for usernames and passwords. -->
    
    <html xmlns = "http://www.w3.org/1999/xhtml">
       <head>
          <?php
            $data = extract( $_POST );
   
            // check if user has left USERNAME or PASSWORD field blank
            if ( !$firstname || !$lastname || !$email 
                || !$homeaddress        
                || !$homePhone 
                || !$cellPhone  ) {
               fieldsBlank();
               die();
            }
    echo("$firstname  ,  $lastname ,   $email  ,$homeaddress  ,       
    $homePhone ,
    $cellPhone" );
            
        addToDatabase($firstname  ,  $lastname ,   $email  ,$homeaddress,$homePhone ,$cellPhone);
          
        

      
      

     
   


         // print a message indicating that fields 
         // have been left blank
        function fieldsBlank()
        {
            print( "<title>Access Denied</title></head>
                <body style = \"font-family: arial; 
                font-size: 1em; color: red\">
                <strong>
                Please fill in all form fields.
                <br /></strong>" );
        } 


        function addToDatabase($firstname  ,  $lastname ,   $email  ,
        $homeaddress  ,       
         $homePhone ,
         $cellPhone){
           

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
            $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
            
            $sql = "CREATE TABLE IF NOT EXISTS Users (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(100),
                homeaddress VARCHAR(50),
                homePhone VARCHAR(10),
                cellPhone VARCHAR(10)
                ) ";
            
            if ($conn->query($sql) === TRUE) {

                echo "Table Users created successfully";

                $sql2 = "INSERT INTO users ( firstname, lastname ,email, homeaddress , homePhone, cellPhone)
                    VALUES ( '$firstname',  '$lastname' ,'$email'  , '$homeaddress ' , '$homePhone' ,'$cellPhone') ";

                    if ($conn->query($sql2) === TRUE) {
                    echo "New record created successfully";
                    } else {
                    echo "Error: " . $sql2 . "<br>" . $conn->error;
                    }

                
              } else {
                echo "Error creating table: " . $conn->error;
              }
          
              $conn->close();

        }

       
     ?>
            </body>
            </html>
                               
                                                                                                                                                                                                    