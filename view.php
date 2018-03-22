<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"mydb");



?>


<!DOCTYPE html>
<html>
	<head>
	<title> details</title>
		<meta charset="utf-8">
	
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	 
	 <style type="text/css" media="all">
	 
	 
 

	 
	 
	*{color:;}
	body{
	 background-image: url();
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
width:400px;
	}
	
	.v{border:0px solid #fff; padding:50px 60px; margin-top:20vh;

-webkit-box-shadow: -1px 5px 28px 12px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 5px 28px 12px rgba(0,0,0,0.75);
box-shadow: -1px 5px 28px 12px rgba(0,0,0,0.75);}
	
	
	</style>
	</head>
	<body>
	    
		<form name="form1" action="" method="POST"  class="v">
		<table>
			<div class="form-group">
						<label for="exampleInputEmail1">username</label>
							<input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="username">
					</div>
					
					
					<div class="form-group">
						<label for="exampleInputEmail2">Email</label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="email">
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
					<tr>
					    <td colspan="2" align="center">
						<input  type="submit" name="submit" value="DELETE" style="background: red">
						<input type="submit" name="submit2" value="UPDATE">
						<input type="submit" name="submit3" value="SEARCH">
						<input type="submit" name="submit4" value="Display" class="btn btn-primary">
						</td>
						
						
					</tr>
		                 
		</table>
		<div ><input type="submit" name="logout" value="LOGOUT"></div>
	</form>
	
	
	
	<?php
	 
	 if(isset($_POST["logout"]))
	{
		session_start();
	session_destroy();
	unset($_SESSION['username']);
	$_SESSION['message']="You are now logged out";
	
	header("location:index.php");
	}
	
	if(isset($_POST["submit"]))
	{
		mysqli_query($link,"delete from registration where username='$_POST[username]'");
	}
	
	if(isset($_POST["submit2"]))
	{
		mysqli_query($link,"update registration set email='$_POST[email]',mobile='$_POST[mobile]',dob='$_POST[dob]',gender='$_POST[gender]',address='$_POST[address]' where username='$_POST[username]'");
	}
	
	if(isset($_POST["submit3"])){
		$res=mysqli_query($link,"select * from registration where username='$_POST[username]'");
		echo"<table border=1>";
		echo"<tr>";
			echo"<th>"; echo "username"; echo "</th>";
			echo"<th>"; echo "email"; echo "</th>";
			echo"<th>"; echo "mobile"; echo "</th>";
			echo"<th>"; echo "dob"; echo "</th>";
			echo"<th>"; echo "gender"; echo "</th>";
			echo"<th>"; echo "address"; echo "</th>";
			
			
		echo"</tr>";
		while($row=mysqli_fetch_array($res))
		{
			echo"<tr>";
			echo"<td>"; echo $row["username"]; echo "</td>";
			echo"<td>"; echo $row["email"]; echo "</td>";
			echo"<td>"; echo $row["mobile"]; echo "</td>";
			echo"<td>"; echo $row["dob"]; echo "</td>";
			echo"<td>"; echo $row["gender"]; echo "</td>";
			echo"<td>"; echo $row["address"]; echo "</td>";
			
			
			echo"</tr>";
		}
	}
	
	
	if(isset($_POST["submit4"])){
		$res=mysqli_query($link,"select * from registration ");
		echo"<table border=1>";
		echo"<tr>";
			echo"<th>"; echo "username"; echo "</th>";
			echo"<th>"; echo "email"; echo "</th>";
			echo"<th>"; echo "mobile"; echo "</th>";
			echo"<th>"; echo "dob"; echo "</th>";
			echo"<th>"; echo "gender"; echo "</th>";
			echo"<th>"; echo "address"; echo "</th>";
			
			
		echo"</tr>";
		while($row=mysqli_fetch_array($res))
		{
			echo"<tr>";
			echo"<td>"; echo $row["username"]; echo "</td>";
			echo"<td>"; echo $row["email"]; echo "</td>";
			echo"<td>"; echo $row["mobile"]; echo "</td>";
			echo"<td>"; echo $row["dob"]; echo "</td>";
			echo"<td>"; echo $row["gender"]; echo "</td>";
			echo"<td>"; echo $row["address"]; echo "</td>";
			
			
			echo"</tr>";
		}
	}
	
	
	
	?>
	
	
	</body>
	
			

</html>