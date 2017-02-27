
<?php

include("dbconnect.php");

if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // $password = md5($password);


  $query = "INSERT INTO php(username,email, password) VALUES ('".$username."','".$email."', '".$password."')";

  $result = mysqli_query($con, $query);

  if($result){
    echo "Thank you for Registration";
  }
  else {
    echo "Registration failed try again";
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

</head>
<style type="text/css">
form {
    border: 3px solid grey;
    width:50%;
    height: 320px;
    display: block;
    margin-top:-80px;
    margin-bottom:250px;
    position: relative;
     margin-top:



}
form ::before{

}

 input[type=text], input[type=email], input[type=password] {
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
    padding: -1px;
    z-index: -1;
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
<body>
<div class="page-header">
<div class="jumbotron">
<h1 style="color: #4CAF50;">Welcome</h1>
<p>To our Registration sites</p>
<p style="outline-width: 2px;">Hope you will our services and continue to use it and provide us your feedback.</p>
</div>
</div>
<center>

  <div class="container" >

<form  method="POST" action="register.php">

             <label><h2 style="color: #4CAF50;">Registration</h2></label><br>
              <input type="text"  id="username" name="username" placeholder="Enter username" required><br>


              <input type="email" id="email" name="email" placeholder="Enter email"  required><br>


              <input type="password" id="password" placeholder="Enter password" name="password"   required><br>

              <button type="submit" class="btn btn-success" name="submit"><span class="glyphicon glyphicon-off" ></span>Register</button>
          </form>
          </div>
          </center>

          </body>
</html>
