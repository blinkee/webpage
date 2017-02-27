<?php
include ('dbconnect.php');

session_start();

$login="false";
if(isset($_SESSION['loggedin'])){
	if($_SESSION['loggedin'] == 'true'){
		$login = "true";
		
	}
}


if($login == 'false') {
	header("location:login.php");
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
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.dropdown-menu{
 float :right;
 margin-left: 1160px;
}
nav{
  margin-bottom: 200px;
}
</style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="right: "><p class="text-default ">Mail</p></a>
    </div>
   
   <center>
    <form >
      <div >
        <input type="text"  placeholder="Search" style="width: 500px; height: 35px;">
      
      <button type="submit" class="btn btn-success">search</button><br><br>
      <button type="submit" class="" style="width: 80px;height: 30px;"><input type="checkbox"><span class="caret"></span></button>
       <button type="submit" class="glyphicon glyphicon-repeat" style="width: 80px;height: 30px;"></button>
        <button type="submit" style="width: 80px;height: 30px;">More<span class="caret"></span></button>
    </form>
    </center> 

  </div>
  <div class="container">
  <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" id="bt" style="float: right; width: 80px" onclick=""><span class=" glyphicon glyphicon-cog " ></span></button>
  
  </div>
</div>
<ul class="dropdown-menu" id="list">
            <li><p>Display:</p></li>
         <li><a href="#">Themes</a></li>
        <li><a href="#">setting</a></li>
      <li><a href="gmail.php">logout</a></li>
    <li><a href="#">Send feedback</a></li>
    </ul>
</nav>
<div id="mySidenav" class="sidenav" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><p class="text-success">Mail</p></a>
    </div>
    </div>
    </nav>
    <button>COMPOSE</button>
  <a href="#" >Inbox<span class="badge">10</span></a>
  <a href="#">Starred</a>
  <a href="#">Sent Mail</a>
  <a href="#">Draft<span class="badge">7</span></a></a>
   <a href="#">Circle</a>
    <a href="#">More<span class="caret"></span></a>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

$(document).ready(function(){
 $("#bt").click(function(){
    $("#list").slideToggle("slow");
  });
  });
</script>
<center>
    <iframe src="https://mail.google.com/mail" style=" height:600px; width: 850px;" ></iframe> 
    </center>
</body>
</html> 
