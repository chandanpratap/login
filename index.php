<!DOCTYPE html>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"mydb");



?>
<html lang="en">
<head>

	<title>LOG IN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="style.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>

 

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
			<!--start-->
			
			
			   <form class="form-container" method="GET">
			   <h1>Log In Form</h1>
					<div class="form-group">
						<label for="exampleInputEmail1">username</label>
							<input name="user" type="text" class="form-control" id="exampleInputEmail1" placeholder="username">
						
					</div>
					
					
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="password">
						
					</div>
  
					
					<button type="submit"  name="view" class="btn btn-success btn-block">Submit</button>
					
					<input type="submit" name="reg" value="Register here" class=" btn btn-danger btn-block" />
               </form>
			
			
			
			<!--end-->
			
			
			
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			</div>
			</div>
			
			
			
</body>



</html>

		

<?php
if(isset($_GET["reg"]))
{
	header("Location: reg.php");
//header(location: "reg.php");
	
}
?>
<?php
if(isset($_GET["view"]) and $_GET['user']!="" and $_GET['pass']!="")
{
	 $res=mysqli_query($link,"select * from registration where username='$_GET[username]' and password='$_GET[password]'");
	 if($res)
		 header("Location:view.php");
	 
	 
}
else
{
	//echo "<script>alert('Wrong username and password !!');</script>";
}
?>

