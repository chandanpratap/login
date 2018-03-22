<!DOCTYPE html>
<html lang="en">
<head>

	<title>LOG IN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="style.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
	<style>
	.btn-primary{
	  border-radius:0px;padding:10px; width:48%;
	}
	.btn-danger{
	  border-radius:0px;padding:10px; width:48%;
	}
	*{color:#fff;}





.form-container{border:0px solid #fff; padding:50px 60px; margin-top:20vh;

-webkit-box-shadow: -1px 5px 28px 12px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 5px 28px 12px rgba(0,0,0,0.75);
box-shadow: -1px 5px 28px 12px rgba(0,0,0,0.75);}


body { 
    background-image: url('images/ram1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
}
	
	</style>
	
</head>
<body

 >

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
			<!--start-->
			   <form method="POST" class="form-container">
			   <h1>Register Form</h1>
					<div class="form-group">
						<label for="exampleInputEmail1">username</label>
							<input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="username">
					</div>
					
					
					<div class="form-group">
						<label for="exampleInputEmail2">Email</label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="email">
					</div>
					
					
					
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail3">Mobile</label>
							<input type="number" name="mobile" class="form-control" id="exampleInputEmail3" placeholder="mobile">
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail4">Date Of Birth</label>
							<input type="date" name="dob" class="form-control" id="exampleInputEmail4" placeholder="Dob">
					</div>
					
					<div class="form-group">
						<label >Select Gender:</label>
						   
							<select name="gender" class="form-control text">
							<option value="male">Male</option>
							<option value="female">Female</option>
							</select>
					</div>
  
					<div class="form-group">
						<label>Address:</label>
						<textarea name="address" class="form-control" row="6" placeholder="Enter Address"></textarea>
					</div>
					
					<div class ="form-group">
					<input type="submit" class="btn btn-primary" value="submit" name="submit" id="button"/>
					<input type="reset" class="btn btn-danger" value="reset">
					</div>
					
					
					
               </form>
			
			
			
			<!--end-->
			
			
			
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			</div>
			</div>
</body>



</html>



<?php
$servername = "localhost";
$username = "root";
$password = "";
	$conn =  mysqli_connect($servername, $username, $password,'mydb')or die(mysql_error());

	//$db=mysql_select_db('mydb')or die(mysql_error());
	if(isset($_POST['submit'])){
	  $username=$_POST['username'];
	  $email=$_POST['email'];
	  $password=$_POST['password'];
	  $mobile=$_POST['mobile'];
	  $dob=$_POST['dob'];
	  $gender=$_POST['gender'];
	  $address=$_POST['address'];
	  if($username=='')
	  { 
	    echo"<script>alert('Enter Your Name')</script>";
	  }
	  if($email=='')
	  { 
	    echo"<script>alert('Enter Your Email')</script>";
	  }
	  if($password=='')
	  { 
	    echo"<script>alert('Enter Your Password')</script>";
	  }
	  if($mobile=='')
	  { 
	    echo"<script>alert('Enter Your Mobile')</script>";
	  }
	  if($dob=='')
	  { 
	    echo"<script>alert('Enter Your Dob')</script>";
	  }
	  if($gender=='')
	  { 
	    echo"<script>alert('Enter Your Gender')</script>";
	  }
	  if($address=='')
	  { 
	    echo"<script>alert('Enter Your Address')</script>";
	  }
	  
	  else{
		$query="insert into registration(username,email,password,mobile,dob,gender,address) values('$username','$email','$password',$mobile,'$dob','$gender','$address')";
	  
	  if(mysqli_query($conn,$query)){
			echo"<script>alert('You Are Successfully Registered')</script>";
			
	  }
	  
	  }
	  
	}




?>