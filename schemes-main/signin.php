<!DOCTYPE html>
<html>
<head>
    <title>Signin</title>
    <link rel="stylesheet" href="login.css">
    
    <script src="https://kit.fontawesome.com/abdab7f3b2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="navabt">
    
   
               
    <div class="conabt"><a href='index.php'><i class="fas fa-spa"></i> Schemes</a></div>
    </div><br>
    <form class="form" method="POST" action="#" style="padding-left:580px;">
<legend>Enter your details</legend>
                <div class="icon">
				<i class="fas fa-user"></i> <input class="m-name" type="name" name="m_name" id="m_name" placeholder="Enter Name" required />
				</div><br>
				<div class="icon">
				<i class="fas fa-envelope"></i> <input class="m-email" type="email" name="m_email" id="m_email" placeholder="Enter Email" required />
				</div>
				<br>
				<div class="icon">
				<i class="fas fa-lock"></i>	<input class="m-pass" type="password" name="m_pass" placeholder="Enter Password" required /><br>
				</div>
                <br>
                <div class="icon">
				<i class="fas fa-lock"></i>	<input class="c-pass" type="password" name="c_pass" placeholder="Confirm Password" required /><br>
				</div>
                <br>
				
                <div class="icon">
				<i class="fa fa-phone"></i> <input class="m-phone" type="number" name="m_pno" id="m_balance" placeholder=  "Enter Phone no" required />
				</div>
				<div style="padding-left:50px; ">
                    <br>

				<button type="submit" name="submit"style="background-color:rgb(13, 202, 240);" > SUBMIT</button>
				</div>
</form>
<?php
$conn = mysqli_connect("localhost:3306","root","","schemes");
if ($conn-> connect_error){
die("Connection Failed:". $conn-> connect_error);
}
if(isset($_POST['submit']))
{
$name=$_POST['m_name'];
$email=$_POST['m_email'];
$password=$_POST['m_pass'];
$cpassword=$_POST['c_pass'];
$sql = "SELECT mail from login";
$result= $conn-> query($sql);
	if($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			if($row['mail']==$email){
				echo '<script>alert("E-Mail Already Exist")</script>';
				exit();
			}
		}
	}
$details="INSERT INTO user_details (m_name,m_email,m_pass) VALUES ('$name','$email','$password')";
$query=mysqli_query($conn,$details);

$table="INSERT INTO login (name,mail,pass) VALUES ('$name','$email','$password')";
$query=mysqli_query($conn,$table);

header("Refresh:0;url=login.php");
}
?>