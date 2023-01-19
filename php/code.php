<?php
session_start();

include 'connection.php';
if(isset($_POST['save_data']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $bloodgroup=$_POST['bloodgroup'];
    $gender=$_POST['gender'];
    $Contact_number=$_POST['Contact_number'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $query="insert into `donorinfo`(name, age, bloodgroup, gender, Contact_number, email, address) VALUES ('$name','$age','$bloodgroup','$gender','$Contact_number','$email','$address')";
    $res=mysqli_query($con,$query);

    if($res)
    {
        ?>
        <script>
        alert("data inserted properly");
        </script>
        <?php

    }
    else{
        ?>
        <script>
        alert("data not inserted properly");
        </script>
        <?php
        

    }
}

?>