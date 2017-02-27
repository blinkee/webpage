<?php

session_start();

include("dbconnect.php");

$id="";
if(isset($_POST['submit'])) {
    $email  = $_POST['email'];
    $password = $_POST['password'];

    // $password = md5($password);


    $query = "SELECT * FROM php WHERE email ='".$email."' AND password ='".$password."'";
// $query = "SELECT * FROM php WHERE id=".$id;

    $result =mysqli_query($con, $query);

    if($result) {       
        if(mysqli_num_rows($result)> 0) {
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
            }
          // session_start();
            $_SESSION['loggedin']  = 'true';
            $_SESSION['email'] = $email;
            $_SESSION['user_id'] = $id;
             header("location:home.php");    
        }
        
    } else {
        echo "<br>User Not Found";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="" content="width=device-width initial">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
form {
    border: 3px solid #f1f1f1;
}
body{
    background-color:#f1f1f1;
}
input[type=email], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}



/*img{
    width: 40%;
    border-radius: 10%;
    
}*/

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
 #bu{
    text-decoration: none;
}
#reg{
margin-left: 47%;


}
</style>
<body>


  

 
<center>
<img src="person-icon.png" height="350" width="350" id="img" >
 <div class="container" style="background-color:#f1f1f1">
<form action="gmail.php" method="POST" id="frm">

 
   
    <input type="email" placeholder="Enter Email" name="email"   class="form-control" required>

    
    <input type="password" placeholder="Enter Password" name="password" class="form-control" required>
        
    <button type="submit" name="submit" class="btn btn-primary" id="but">Login</button><br>
    <input type="checkbox"  id="check"> Remember me
<span class="psw">Forgot<a href="update.php">password?</a></span><br><br>

 <div id="reg"><button type="button" class="btn btn-info btn-lg"   id="myBtn"  style="width: 100px; float:left;"  ><a href="register.php" id="bu">  Register </a></button> </div>


  </div>
</form>
</center>
</body>
</html>
