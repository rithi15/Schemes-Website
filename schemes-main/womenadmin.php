<!DOCTYPE html>
<html>
<head>
    <title>Women</title>
    <link rel="stylesheet" href="login.css">
    
    <script src="https://kit.fontawesome.com/abdab7f3b2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<style>
    .z{
        padding-left:15px;
    }</style>
    <div class="navabt">
    <a href="indexadmin.php"><i class="fas fa-home"></i>
                    Home</a>
        
               
        <div class="conabt"><a href='#'><i class="fas fa-book-reader"></i>Admin</a></div>
</div>
<br>
<b>TO ADD A SCHEME : </b><a class="btn btn-danger"style="width:150px; heigth:50px;" href="womenadd.php"><b><i class="fas fa-hand-point-right"></i> ADD</b></a>
<br>
<?php
        $conn = mysqli_connect("localhost:3306","root","","schemes");
        if ($conn-> connect_error){
        die("Connection Failed:". $conn-> connect_error);
        }
        $sql = "SELECT id,scheme,details from listw";
        $result= $conn-> query($sql);
        if ($result-> num_rows > 0)
        {
            while($row =$result-> fetch_assoc()){
            ?>
            <br>
            
            <div class="z">
            <tr>

            <td><a class="btn btn-light"style="width:100px; heigth:50px;"><?php echo $row['id']; ?> </td>
            <td><a class="btn btn-light"style="width:1000px; heigth:50px;"><?php echo $row['scheme']; ?> </td>
            <td><a class="btn btn-success"style="width:150px; heigth:50px;" href="womenadmin.php?id=<?php echo $row['id'] ?>">DELETE</a></td>
            </tr></div>
            <?php
            }
        }

     
if(isset($_GET['id'])){
	$Id=$_GET['id'];
	$del="DELETE FROM listw WHERE $Id=id";
	$query=mysqli_query($conn,$del);
	if($query){
		echo '<script>alert(" Successfully Deleted !!!")</script>';
        header("Refresh:0;url=womenadmin.php");

	}
}
?>