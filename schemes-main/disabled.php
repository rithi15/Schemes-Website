<!DOCTYPE html>
<html>
<head>
    <title>Physically Challenged</title>
    <link rel="stylesheet" href="login.css">
    
    <script src="https://kit.fontawesome.com/abdab7f3b2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body><style>
.s{
    padding-left:370px;

}
table, tr, td ,th{
  border:3px solid black;
}
td,th{

    padding:30px;
}
</style>
    <div class="navabt">
    <a href="index.php"><i class="fas fa-home"></i>
                    Home</a>
    
               
    <div class="conabt"><a href='index.php'><i class="fas fa-spa"></i> Schemes</a></div>
</div><div class="s"><table>
            <tr>
    <th>S.NO</th>
    <th style="padding-left:70px;">SCHEMES</th>
    <th>DETAILED DESCRIPTION</th></tr>
<?php
        $conn = mysqli_connect("localhost:3306","root","","schemes");
        if ($conn-> connect_error){
        die("Connection Failed:". $conn-> connect_error);
        }
        $sql = "SELECT id,scheme,details from listp";
        $result= $conn-> query($sql);
        if ($result-> num_rows > 0)
        {
            while($row =$result-> fetch_assoc()){
            ?>
            <br>
            <tr>
            <td style="padding-left:40px;"><b><?php echo $row['id']; ?> </b></td>
            <td><b><?php echo $row['scheme']; ?> </b>
            <td><a href="discriptiondisabled.php?id=<?php echo $row['id'] ?>">View more details</a></td>
            </td></tr></div>
            <?php
            }
        }
        ?></table>