<php
?>
<!DOCTYPE html>
<php
?>
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
 
    <a class="navbar-brand" href="#"><img src="../image/log.png" width="80px"></a>
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
      </ul>
    </div>
  
</nav>
<div class="container mt-5">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header text-center">
<h3>Register Here</h3>
</div>
<div class="card-body">
<?php
include 'connection.php';
$ids=$_GET['id'];
$showquery="select * from donorinfo where id={$ids}";
$showdata=mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);

if(isset($_POST['save_data']))
{
  $idupdate=$_GET['id'];
 
  $name=$_POST['name'];
  $Date_of_birth=$_POST['Date_of_birth'];
  $age=$_POST['age'];
  $bloodgroup=$_POST['bloodgroup'];
  $gender=$_POST['gender'];
  $Contact_number=$_POST['Contact_number'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $Covid19_affected=$_POST['Covid19_affected'];
  //$insertquery="insert into donorinfo (name,Date_of_birth,age,bloodgroup,gender,Contact_number,email,address,Covid19_affected) values ('$name','Date_of_birth','$age',$bloodgroup','$gender','+88".$Contact_number."','$email','$address','Covid19_affected')";
  $query="update donorinfo set name='$name',Date_of_birth='$Date_of_birth',age='$age',bloodgroup='$bloodgroup',gender='$gender',Contact_number='$Contact_number',email='$email',address='$address',Covid19_affected='$Covid19_affected' where id=$idupdate";
  $res=mysqli_query($con,$query);

  if($res)
  {
    ?>
    <script>
    alert("Data updated properly");
    </script>
    
    <?php
    header('Location: display.php');
    
  }
  else{
    ?>
    <script>
    alert("Data not updated properly");
    </script>
    <?php

  }
}
?>

<form action="" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" value="<?php echo $arrdata['name']?>" placeholder="Enter name" required>
  </div>
  <div class="form-group">
    <label for="Date of Birth">D.O.B</label>
    <input type="text" name="Date_of_birth" class="form-control" id="Date of Birth" value="<?php echo $arrdata['Date_of_birth']?>" placeholder="Date of Birth">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" name="age" class="form-control" id="age" value="<?php echo $arrdata['age']?>" placeholder="Age">
  </div>
  <div class="form-group">
    <label for="bloodgroup">Blood Group</label>
    <input type="text" name="bloodgroup" class="form-control" id="bloodgroup" value="<?php echo $arrdata['bloodgroup']?>" placeholder="Blood Group">
  </div>
  <div class="form-group">
    <label for="gender">Gender</label>
    <input type="text" name="gender" class="form-control" id="gender" value="<?php echo $arrdata['gender']?>"  placeholder="Gender">
  </div>
  <div class="form-group">
    <label for="Contact_number">Contact Number</label>
    <input type="text" name="Contact_number" minlength="14" maxlength="14" class="form-control" id="Contact_number" value="<?php echo $arrdata['Contact_number']?>" placeholder="Contact Number">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $arrdata['email']?>" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" class="form-control" id="address" value="<?php echo $arrdata['address']?>" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="Covid19_affected">Covid19_affected</label>
    <input type="text" name="Covid19_affected" class="form-control" id="Covid19_affected" value="<?php echo $arrdata['Covid19_affected']?>" placeholder="Covid19_affected">
  </div>

  

  <button type="submit" name="save_data" value="Update" class="btn btn-primary">Update</button>
</form>
</div>
</div>
</div>
</div></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
