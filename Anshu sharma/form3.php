<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db_name="free fire";
    //Database connection
    $conn =  mysqli_connect('localhost','root','','free fire');
    if(!$conn){
	    die('connection Failed : '.mysqli_connect_error());
	}else{
		echo"connection successful";
	}
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
	$firstname =$_POST['firstname'];
	$lastname =$_POST['lastname'];
	$email =$_POST['email'];
	$phonenumber =$_POST['phonenumber'];
	$password = $_POST['password'];
	$sql="INSERT INTO 'deepanshusharma' ('firstname','lastname','email','phonenumber','password') VALUES('$firstname','$lastname','$email','$phonenumber','$password')";
	$query= mysqli_query($conn,$sql);
	}
	if(!$query){
		echo "sucessfull";
	}else{
		echo"unsucess".mysqli_connect_error();
	}
?>