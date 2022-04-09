<!doctype html>
<html lang="en">
  <head>
  	<title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-30">
					<div class="">
						<div class="img" style="background-image: url(images/bg-1.jpg);">
			      </div>
				<div class="login-wrap p-4 p-md-5">
			      	<div class="">
			      		<div class="w-900">
			      			<h3 class="mb-4 ">Create User</h3>
			      		</div>			
			      	</div>
						<form action="./postUser" method="post" class="user-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="firstname">First Name</label>
			      			<input type="text" name="firstname" class="form-control" placeholder="first Name" required>
			      		</div>
                          <div class="form-group mb-3">
			      			<label class="label" for="lastname">Last Name</label>
			      			<input type="text" name="lastname" class="form-control" placeholder="last Name" required>
			      		</div>
                          <div class="form-group mb-3">
			      			<label class="label" for="email">Email</label>
			      			<input type="text" name="email" class="form-control" placeholder="email" required>
			      		</div>
                          <div class="form-group mb-3">
			      			<label class="label" for="homeaddress">Address</label>
			      			<input type="text" name="homeaddress" class="form-control" placeholder="home address" required>
			      		</div>
                          </div>
                          <div class="form-group mb-3">
			      			<label class="label" for="homePhone">Home Phone</label>
			      			<input type="text" name="homePhone" class="form-control" placeholder="home Phone" required>
			      		</div>
                          <div class="form-group mb-3">
			      			<label class="label" for="cellPhone">Cell Phone</label>
			      			<input type="text" name="cellPhone" class="form-control" placeholder="cell Phone" required>
			      		</div>
		          
                        <div class="form-group">
                            <button type="submit" name = "Submit" class="form-control btn btn-primary rounded submit px-3">Submit</button>
                        </div>
		            
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	</body>
</html>

