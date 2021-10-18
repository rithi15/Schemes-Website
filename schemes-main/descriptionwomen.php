<!DOCTYPE html>
<html>
<head>
    <title>Women</title>
    <link rel="stylesheet" href="login.css">
    
    <script src="https://kit.fontawesome.com/abdab7f3b2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body><style>
    .z{
        padding:center;
    }</style>
    <div class="navabt">
    <a href="women.php"><i class="fas fa-clipboard-list"></i>
                    Back</a>
               
        <div class="conabt"><a href='#'><i class="fas fa-book-reader"></i> Schemes</a></div>
</div>
<br>
<?php
$conn = mysqli_connect("localhost:3306","root","","schemes");
if ($conn-> connect_error){
die("Connection Failed:". $conn-> connect_error);
}
if (isset($_GET['id'])) {
        $ID =  mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "SELECT * FROM listw WHERE id=$ID";
        $result = mysqli_query($conn, $sql);
        $row1 = mysqli_fetch_assoc($result);
    }
    ?>
    <div class="z">
    <tr>
  <td><!--<a class="btn btn-light"style="width:1000px; heigth:100px; ">--><b><?php echo htmlspecialchars($row1['descp']); ?></b></td></tr></div>