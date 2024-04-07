<?php
include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records Page</title>
</head>
<style>

    body {
        background-color: #f5f5f5;
        font-family: Arial, sans-serif;
        background: url('img/mmm.jpg') no-repeat;
        background-size:cover;
    }

    h1{
        text-align: center;
        color: white;
        text-shadow: 5px 3px purple;
        
        font-family: calibri;
    }

    

    

   
   .nav a{
    padding:25px;
    font-size:25px;
    font-weight:bold;
    text-decoration:none;
    background-color: none;
    color:purle;
   }
   .nav a:hover{
    background-color:white;
    color:purple;
    
   }
   table{
    border-style:groove;
    border-color:violet;
    border-width: 7px;
   }
   th, td{
    padding: 15px;
    text-align: left;
   }
   tr a{
    color:black;
    font-weight: bold;
    font-size: 25px;
    text-decoration:none;
   }
   tr a:hover{
    color:red;

   }
   tr{
    background-color:rgba(255,255,2,0.07);
   }
   tr:hover{
    background-color: cyan;
   }
    


</style>
<body>
<div class="nav">
    <a href="WEB2.php"> Add Students </a> &nbsp; | &nbsp;
    <a href="records.php"> View Records </a> |


</div>

<h1>List of Students </h1>

<table border="5px solid">
    <tr>
        <th> Id </th>
        <th> idnumber </th>
        <th> Firstname</th>
        <th> Middlename</th>
        <th> Lastname</th>
        <th> Section</th>
        <th> Age</th>
        <th>Email</th>
        <th> Address</th>
        <th> Phonenumber</th>
        <th> Password</th>
        <th> Action 1 </th>
        <th> Action 2 </th>
</tr>


    <?php
    $getdata = mysqli_query($conn,"SELECT * FROM students");
    while($row = mysqli_fetch_array($getdata)){

    
    ?>
    <tr>
        <td> <?php echo $row['id'];?>  </td>
        <td> <?php echo $row['idnumber'];?> </td>
        <td> <?php echo $row['firstname'];?> </td>
        <td> <?php echo $row['middlename'];?> </td>
        <td> <?php echo $row['lastname'];?> </td>
        <td> <?php echo $row['section'];?> </td>
        <td> <?php echo $row['age'];?></td>
        <td> <?php echo $row['email'];?> </td>
        <td> <?php echo $row['address'];?></td>
        <td> <?php echo $row['phonenumber'];?> </td>
        <td> <?php echo $row['password'];?> </td>
        <td> <a href="update.php?id=<?php echo $row["id"];?>"> Update </a> </td>
        <td> <a href="delete.php?id=<?php echo $row["id"];?>"> Delete </a> </td>

        <?php
    }
        ?>
        
</tr>

</table>
    
</body>
</html>