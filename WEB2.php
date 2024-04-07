<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

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
    


</style>

</head>
<body>

<div class="nav">
    <a href="WEB2.php"> Add Students </a> &nbsp; | &nbsp;
    <a href="records.php"> View Records </a> |


</div>
    <h1>STUDENT PROFILE </h1>

    <form action="process.php" method="POST">
        
        <label>Id Number: </label> <br>
        <input type="text" name="idnumber" required></p>

        <label>First Name: </label> <br>
        <input type="text" name="firstname" required></p>

        <label>Middle Name: </label> <br>
        <input type="text" name="middlename" required></p>

        <label>Last Name: </label> <br>
        <input type="text" name="lastname" required></p>

        <label>Section: </label> <br>
        <input type="text" name="section" required></p>

        <label>Age: </label> <br>
        <input type="text" name="age" required></p>

        <label>Email: </label> <br>
        <input type="email" name="email" required></p>

        <label>Address: </label> <br>
        <input type="text" name="address" required></p>

        <label>Phone Number: </label> <br>
        <input type="text" name="phonenumber" required></p>

        <label>Password: </label> <br>
        <input type="password" name="password" required></p>


        <input type="submit" name="button" value="Register">

    </form>

    
    
</body>
</html>