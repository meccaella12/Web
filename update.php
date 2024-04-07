<?php
    include "conn.php";
    $ref_id = $_GET['id'];

    $getdata = mysqli_query($conn,"SELECT * FROM students WHERE id=' $ref_id'");

    while($d=mysqli_fetch_object($getdata)){
        $idnumber = $d -> idnumber;
        $firstname = $d -> firstname;
        $middlename= $d -> middlename;
        $lastname = $d -> lastname;
        $section = $d -> section;
        $age = $d -> age;
        $email = $d -> email;
        $address = $d -> address;
        $phonenumber = $d -> phonenumber;
        $password = $d ->  password;
        

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>

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
    form {
        max-width: 500px;
        margin: 0 auto;
        font-weight:bold;
        background-color:none;
        padding: 45px;
        border-radius: 5px;
        border-style: dashed;
        border:5px solid purple;
       
      
    }
    label {
        display:block;
        font-size: 16px;
        margin-bottom: 5px;
        color: purple;
        text-shadow: 1px 1px white;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        display: block;
        background-color:rgba(255,255,255,0.07);
        width: 95%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border:2px solid purple;
       
    }
    input:hover{
        border-radius: 5px;
        border:2px solid white;
    }

    input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 50px;
        background-color:purple;
        color: 	white;
        font-weight:bold;
        font: size: 25px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: white;
        color:purple;
    } 
   

</style>
<body>
    <h1> Update Records </h1>
<form action="process.php?id=<?php echo $ref_id;?>" method="POST">

<label>Id Number: </label> <br>
<input type="text" name="update_idnumber" value="<?php echo $idnumber; ?>" required></p>

<label>First Name: </label> <br>
<input type="text" name="update_firstname" value=" <?php echo $firstname; ?>" required></p>

<label>Middle Name: </label> <br>
<input type="text" name="update_middlename" value=" <?php echo $middlename; ?>" required></p>

<label>Last Name: </label> <br>
<input type="text" name="update_lastname" value=" <?php echo $lastname; ?>" required></p>

<label>Section: </label> <br>
<input type="text" name="update_section" value=" <?php echo $section; ?>"required></p>

<label>Age: </label> <br>
<input type="text" name="update_age" value=" <?php echo $age; ?>" required></p>

<label>Email: </label> <br>
<input type="email" name="update_email" value=" <?php echo $email; ?>" required></p>

<label>Address: </label> <br>
<input type="text" name="update_address" value=" <?php echo $address; ?>" required></p>

<label>Phone Number: </label> <br>
<input type="text" name="update_phonenumber" value=" <?php echo $phonenumber; ?>" required></p>

<label>Password: </label> <br>
<input type="password" name="update_password" value=" <?php echo $password; ?>" required></p>


<input type="submit" name="update_student" value="UPDATE">

</form>

</body>
</html>