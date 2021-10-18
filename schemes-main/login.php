<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    
    <script src="https://kit.fontawesome.com/abdab7f3b2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <!--<style>body{
    /* background: url(https://wallpaperaccess.com/full/2591579.jpg);*/
     background-image: linear-gradient( white, rgb(13, 202, 240));
    
 
     background-repeat: no-repeat;
     background-size: contain;
 
     margin: 0;
     padding: 0;
     font-family:Arial, Helvetica, sans-serif;
 
 }.navabt{
     overflow: hidden;
     background:rgb(13,202,240);
     height: 63px;
     margin-top: -5px;
 }.navabt a{
     float: right;
     border-left: 1px solid dimgrey;
     color:black;
     text-align: center;
     padding: 20px 16px;
     font-size: 18px;
     width: 150px;
     text-decoration: none;
     font-weight: bold;
 
 }
 .conabt a{
     float:left;
     font-size: 20px;
     
 }
 
 .navabt a:hover{
    
     color:white;
 }</style>-->
    <div class="navabt">
    
    <div class="conabt"><a href='index.php'><i class="fas fa-spa"></i> Schemes</a></div>
    </div>
    <!--<br><br><br><br>-->
    <br><br><br>
<form class="form" method="POST" action="#" style="padding-left:580px;">
<legend>Enter login details</legend>
                <div class="icon">
				<i class="fas fa-user"></i>	<input  class="m-user" type="email" name="m_user" id="m_user" placeholder="E-MailID" required />
        
				</div>
				<br>
				<div class="icon">
				<i class="fas fa-lock"></i>	<input class="m-pass" type="password" name="m_pass" placeholder="Password" required />
				</div>
                <br></br>
                <div class="login"style="padding-left:50px;">
                <button type="submit" name="login"  > <i class="btn btn-info"style="width:100px; heigth:50px;">LOGIN</i></button>
            <br></div>
                    Don't have an account?<a class="btn btn-link" href="signin.php"><b>SIGN IN</b></a>
                    </form> 
                    <!--<br><br><br><br><br><br>-->
</body>
<?php
$conn = mysqli_connect("localhost","root","","schemes");
if ($conn-> connect_error){
die("Connection Failed:". $conn-> connect_error);
}
if(isset($_POST['login']))
{
session_start();
$_SESSION['email']=$_POST['m_user'];
$name=$_POST['m_user'];
$password=$_POST['m_pass'];
$sql = "SELECT mail,pass from login";
$i=0;
$result= $conn-> query($sql);
	if($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
            if($name=='admin@gmail.com' and $password=='Admin123$')
            {
			header("Refresh:0;url=indexadmin.php");
            exit();

            }
		if($row['mail']==$name and $row['pass']==$password){
			header("Refresh:0;url=index.php");
            $i=1;
		}
    }
		if($i==0){
			echo '<script>alert("Invalid details")</script>';
		}
	}
}
?>