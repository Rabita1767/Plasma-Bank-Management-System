

<!DOCTYPE html>
<html>
<head>
  
  <title>website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/stylereg.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Lato&display=swap" rel="stylesheet">
  
</head>
<body>
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
 
    <a class="navbar-brand" href="#"><img src="../image/log.png" width="90px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="members.php">Our Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userinfo.php" >Blood Type</a>
        </li>
      

        <li class="nav-item">
          <a class="nav-link" href="search.php" >Find More</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="receiver.php">Our Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration.php" >Join Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="overview.php" >Overview</a>
        </li>
      </ul>
    </div>
  
</nav>
</section>
<div class="container">
  <div class="row">
    <div class="col-md-6 register-left">
      <img src="image/reg.png">
    </div>
    <div class="col-md-6 register-right">
    <h3>Register Here</h3>
      <div class="register-form">
      <form action="" method="post">
  <div class="form-group">

    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="Date_of_birth">D.O.B</label>
    <input type="date" name="Date_of_birth" class="form-control" id="Date of Birth" placeholder="Enter your Date of Birth">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" name="age" class="form-control" id="age" placeholder="Age">
  </div>
  <div class="form-group">
    <label for="gender">Gender</label>
    <input type="text" name="gender" class="form-control" id="gender" placeholder="Gender">
  </div>
  <div class="form-group">
    <label for="bloodgroup">Blood Group</label>
    <input type="text" name="bloodgroup" class="form-control" id="bloodgroup" placeholder="Blood Group">
  </div>
  
  <div class="form-group">
    <label for="Contact_number">Contact Number</label>
    <input type="text" name="Contact_number" maxlength="11" minlength="11" class="form-control" id="Contact_number" placeholder="Contact Number">
  </div>
  
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="Covid19_affected">Covid19 Affected</label>
    <input type="text" name="Covid19_affected" class="form-control" id="Covid19_affected" placeholder="Affected or Not">
  </div>

  

  <button type="submit" name="save_data"class="btn btn-primary">Submit</button>
</form>


      </div>


    </div>

  </div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
<?php
$username="root";
$password="";
$server="localhost";
$db="donor1";
$con=mysqli_connect($server,$username,$password,$db);
if(isset($_POST['save_data']))
{
  $name=$_POST['name'];
  $Date_of_birth=$_POST['Date_of_birth'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $bloodgroup=$_POST['bloodgroup'];
  
  $Contact_number=$_POST['Contact_number'];
  
  $address=$_POST['address'];
  $Covid19_affected=$_POST['Covid19_affected'];
  $insertquery="insert into receiver (name,Date_of_birth,age,gender,bloodgroup,Contact_number,address,Covid19_affected) values ('$name','$Date_of_birth','$age','$gender','$bloodgroup','+88".$Contact_number."','$address','$Covid19_affected')";
  $res=mysqli_query($con,$insertquery);
  if($res)
  {
    ?>
    <script>
    alert("Data inserted properly");
    </script>
    <?php
    
    
    
  }
  else{
    ?>
    <script>
    alert("Data not inserted properly");
    </script>
    <?php

  }
}
?>
