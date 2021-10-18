<!DOCTYPE html>
<html>
<head>
    <title>Physically Challenged</title>
    <link rel="stylesheet" href="index.css">
    
    <script src="https://kit.fontawesome.com/abdab7f3b2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body><style>
    .y{
        padding-left:540px;
    }
    .x{
        padding-left:450px;
    }</style>
    <div class="navabt">
    <a href="indexadmin.php"><i class="fas fa-home"></i>
                    Home</a>
        
               
        <div class="conabt"><a href='#'><i class="fas fa-book-reader"></i> Admin</a></div>
</div>
<form action="disabledadd.php" method="post"><div class='x'>
			<div>
            <label for="id">Scheme Id : </label></div><div>
				<input type="number" name="Id" required=""><br>
			</div><br>

			<div>
            <label for="bname">Scheme Name : </label>
            </div><div></i><textarea name="Title" cols="50" rows="5"></textarea>
			</div>

			<br>
			
            <div>
			<label for="bname">Description : </label></i></div><div></i><textarea name="descp" cols="50" rows="10"></textarea>
				
			</div><br></div>
<div class='y'>
			<button type="submit" name="submit"> <i class="btn btn-danger"style="width:200px; heigth:50px;">ADD</i> </button></div>
		</form>
	</div>
</body>

<?php 
$conn = mysqli_connect("localhost:3306","root","","schemes");
if ($conn-> connect_error){
die("Connection Failed:". $conn-> connect_error);
}
if(isset($_POST['submit']))
{
	$id=$_POST['Id'];
	$name=$_POST['Title'];
	$descp=$_POST['descp'];
	$status="View more Details";
	$new_book="INSERT INTO listp (id,scheme,descp,details) VALUES ('$id','$name','$descp','$status')";
   
	$query=mysqli_query($conn,$new_book);
	if($query){
		echo '<script>alert("Scheme is Added Successfully")</script>';
		header("Refresh:0;url=disabledadmin.php");
	}
}
?>