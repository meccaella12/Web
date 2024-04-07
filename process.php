<?php

    include "conn.php";


    if(isset($_POST['button'])){
        

        $idnumber=$_POST['idnumber'];
        $firstname=$_POST['firstname'];
        $middlename=$_POST['middlename'];
        $lastname=$_POST['lastname'];
        $section=$_POST['section'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $phonenumber=$_POST['phonenumber'];
        $password=$_POST['password'];
        

        $insert_users=mysqli_query($conn, "INSERT INTO students VALUES('0','$idnumber','$firstname','$middlename','$lastname','$section','$age','$email','$address','$phonenumber','$password')");
    
        if($insert_users==TRUE){
        
      ?>

<script>
        alert("Data updates!");
        window.location.href="records.php";
        </script>
        <?php

    }else{
        ?>
        <script>
        alert("Error Deleting!");
        window.location.href="records.php";
        </script>
        <?php
    }
}


    if(isset($_POST['update_student'])){
        $ref_id = $_GET['id'];

       $a = $_POST['update_idnumber'];
       $b = $_POST['update_firstname'];
       $c = $_POST['update_middlename'];
       $d = $_POST['update_lastname'];
       $e = $_POST['update_section'];
       $f = $_POST['update_age'];
       $g = $_POST['update_email'];
       $h = $_POST['update_address'];
       $i = $_POST['update_phonenumber'];
       $j = $_POST['update_password'];

       $update_student = mysqli_query($conn, "UPDATE students SET idnumber='$a', firstname='$b', middlename='$c', lastname='$d', section='$e', age='$f', email='$g', address='$h', phonenumber='$i', password='$j' WHERE id='$ref_id'");

       if($update_student == true){
        ?>
        <script>
            alert("Data is updated");
            window.location.href="records.php";
            </script>
            <?php
       }else{
        ?>
        <script>
            alert("Error is updating");
            window.location.href="records.php";
            </script>
            <?php

       }
    }


    ?>



