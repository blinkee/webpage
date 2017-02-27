<?php

include("dbconnect.php");
$error = "";
$flag = 0;
$id = '';
if(isset($_POST['submit'])) {
	if(!empty($_POST['email'])) {
	} else {
		$error = "Email is required";
		$flag = 1;
	}

	if(!empty($_POST['password'])) {
	} else {
		$error = "Password is Required";
		$flag = 1;
	}

	if($flag !=1) {

		$id = $_POST['id'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "UPDATE php SET email = '".$email."',   password = '".$password. "' WHERE id =".$id;
		$result = mysqli_query($con, $query);

		
	}

}


$email  = "";
$password = "";


if(isset($_POST['id'])) {
	$id = $_POST['id'];
}

if(isset($_GET['id'])) {
	$id = $_GET['id'];
}


if(isset($_GET['id']) || isset($_POST['id'])) {		
	$query = "SELECT * FROM php WHERE id=". $id;

$result = mysqli_query($con, $query);
if($result){
if(mysqli_num_rows($result) > 0 ) {
	while ( $row = mysqli_fetch_assoc($result)) {		
		$email = $row['email'];
		$password = $row['password'];
	}
}	
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="" content="width=device-width initial">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style type="text/css">
  
    form {
    border: 3px solid grey;
    width:50%;
    height: 320px;
    display: block;
    padding-top: 50px;
   
    position: relative;
     margin-top:-120px;

   
}
    
   

    	input[type=email], input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    box-sizing: border-box;
  }
  body{
    background-color:#f1f1f1;
}
.container {
    padding: 16px;
    
}
span.psw {
    float: right;
    padding-top: 7px;
    margin-right: 320px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
   
}
p{
  margin-left: 20px;
  text-align: justify;
  text-indent: 50px;
}

.jumbotron{
  margin-top:-90px; 
}
    </style>
</head>
<body>
<div class="page-header">
<div class="jumbotron">
<h1 style="color: #4CAF50;">Welcome</h1>
<p>To our Update sites</p>

</div>
</div>
<center>
 <div class="container" >

	<form method="POST" action = "update.php">
	<label><h2 style="color: #4CAF50;">Update</h2></label><br>
		<input type="email" name="email" placeholder="Enter email" required value="<?php echo $email; ?>"><br>
		 <input type="password" name="password" placeholder="Enter the password" value="<?php echo $password; ?>"><br>
		<input type="hidden" value="<?php echo $id; ?>" name="id">
		<input type="submit" class="btn btn-primary" name="submit" value="Update">
	</form>
	</div>
	</center>
</body>
</html>