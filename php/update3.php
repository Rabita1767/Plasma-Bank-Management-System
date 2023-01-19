<php
?>
<!DOCTYPE html>
<html>
<head>
  
  <title>website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Lato&display=swap" rel="stylesheet">
  
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index1.php">Plasma Donation Information Management System</a>

  <!-- Links -->
  <ul class="navbar-nav ml-auto" >
    <li class="nav-item">
      <a class="nav-link" href="index1.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="members.php">Our Members</a>
    </li>
    

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Check Avaibility
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="userinfo.php">Blood Type</a>
        <a class="dropdown-item" href="#">Area</a>
        <a class="dropdown-item" href="#">Hospitals</a>
      </div>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="search.php">Find More</a>
    
    </li>
    
  </ul>
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
  $age=$_POST['age'];
  $bloodgroup=$_POST['bloodgroup'];
  $gender=$_POST['gender'];
  $Contact_number=$_POST['Contact_number'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  //$insertquery="insert into donorinfo (name,age,bloodgroup,gender,Contact_number,email,address) values ('$name','$age','$bloodgroup','$gender','$Contact_number','$email','$address')";
  $query="update donorinfo set name='$name',age='$age',bloodgroup='$bloodgroup',gender='$gender',Contact_number='$Contact_number',email='$email',address='$address' where id=$idupdate";
  $res=mysqli_query($con,$query);

  if($res)
  {
    ?>
    <script>
    alert("Data updated properly");
    </script>
    
    <?php
    header('Location: B-.php');
    
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
    <input type="text" name="Contact_number"  minlength="14" maxlength="14" class="form-control" id="Contact_number" value="<?php echo $arrdata['Contact_number']?>" placeholder="Contact Number">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $arrdata['email']?>" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" class="form-control" id="address" value="<?php echo $arrdata['address']?>" placeholder="Address">
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
