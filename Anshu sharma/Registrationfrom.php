<!DOCTYPE html>
<html>
<head>
     <title>User Registration | PHP</title>
</head>
<body>

<div>
    <?php
	if(isset($_POST['create'])){
	echo 'User submitted.';
	}
	?>
</div>
	
<div>
	
	<form action= "form3.php" method= "POST">
	     <div class="container">
		    <h1>Registration</h1>
			<p>Fill up the from with correct values.</p>
			<label for="firstname"><b>first Name</b></label>
			<input type="text" name="firstname" required>
			
			<label for="lastname"><b>Last name</b></label>
			<input type="text" name="lastname" required>
			
			<label for="email"><b>Email Address</b></label>
			<input type="text" name="email" required>
			
			<label for="phonenumber"><b>phone Number</b></label>
			<input type="text" name="phonenumber" required>
			
			<label for="password"><b>Password</b></label>
			<input type="password" name="password" required>
			
			<input type="submit" name="create" value="Sign Up">
			
		</div>
	</form>
		
			</div>
			
			</body>
			</html>
	