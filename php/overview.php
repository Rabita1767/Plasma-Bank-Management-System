<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title></title>
  
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
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
        </li>
        <li class="nav-item">
          <a class="nav-link" href="overview.php" >Overview</a>
        </li>
      </ul>
    </div>
  
</nav>
</section>
<div class="row">
<div class="col-md-4">
<div class="card border-left-success shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of Donor</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
<?php

$query="SELECT id FROM donorinfo ORDER BY id";
$query_run=mysqli_query($con,$query);
$rows=mysqli_num_rows($query_run);
echo '<h1>'.$rows.'</h1>';
?>
</div>
<div class="col-auto">
<a href="total.php"><button type="submit" name="save_data"class="btn btn-primary">Submit</button></a>

</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card border-left-into shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Total Number of A+ Donor</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
<?php

$sql="select count(*) as total from donorinfo where bloodgroup='A+'";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
echo '<h1>'.$output.'</h1>';
?>

</div>
<div class="col-auto">
<a href="display.php"><button type="submit" name="save_data"class="btn btn-primary">Submit</button></a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card border-left-into shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of A- Donor</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
<?php

$sql="select count(*) as total from donorinfo where bloodgroup='A-'";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
echo '<h1>'.$output.'</h1>';
?>
</div>
<div class="col-auto">
<a href="A-.php"><button type="submit" name="save_data"class="btn btn-primary">Submit</button></a>
</div>
</div>
</div>
</div>
</div>


<div class="col-md-4">
<div class="card border-left-into shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of B+ Donor</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
<?php

$sql="select count(*) as total from donorinfo where bloodgroup='B+'";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
echo '<h1>'.$output.'</h1>';
?>
</div>
<div class="col-auto">
<a href="B+.php"><button type="submit" name="save_data"class="btn btn-primary">Submit</button></a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card border-left-into shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of B- Donor</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
<?php

$sql="select count(*) as total from donorinfo where bloodgroup='B-'";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
echo '<h1>'.$output.'</h1>';
?>
</div>
<div class="col-auto">
<a href="B-.php"><button type="submit" name="save_data"class="btn btn-primary">Submit</button></a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card border-left-into shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of O+ Donor</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
<?php

$sql="select count(*) as total from donorinfo where bloodgroup='O+'";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
echo '<h1>'.$output.'</h1>';
?>
</div>
<div class="col-auto">
<a href="O+.php"><button type="submit" name="save_data"class="btn btn-primary">Submit</button></a>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card border-left-into shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of O- Donor</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
<?php

$sql="select count(*) as total from donorinfo where bloodgroup='O-'";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
echo '<h1>'.$output.'</h1>';
?>
</div>
<div class="col-auto">
<a href="O-.php"><button type="submit" name="save_data"class="btn btn-primary">Submit</button></a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card border-left-into shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of AB+ Donor</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
<?php

$sql="select count(*) as total from donorinfo where bloodgroup='AB+'";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
echo '<h1>'.$output.'</h1>';
?>
</div>
<div class="col-auto">
<a href="Ab+.php"><button type="submit" name="save_data"class="btn btn-primary">Submit</button></a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card border-left-into shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of AB- Donor</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
<?php

$sql="select count(*) as total from donorinfo where bloodgroup='AB-'";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
echo '<h1>'.$output.'</h1>';
?>
</div>
<div class="col-auto">
<a href="AB-.php"><button type="submit" name="save_data"class="btn btn-primary">Check More</button></a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card border-left-success shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of Covid Positive Donor</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
<?php
$sql="select count(*) as total from donorinfo where Covid19_affected like '%Pos%'";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
echo '<h1>'.$output.'</h1>';

?>
</div>
<div class="col-auto">

<a href="pos.php"><button type="submit" name="save_data"class="btn btn-primary">Submit</button></a>

</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card border-left-success shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of Covid Negative Donor</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
<?php
$sql="select count(*) as total from donorinfo where Covid19_affected like '%Ne%'";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
echo '<h1>'.$output.'</h1>';

?>
</div>

<div class="col-auto">
<a href="Neg.php"><button type="submit" name="save_data"class="btn btn-primary">Submit</button></a>

</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card border-left-success shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of Donor of Age 20 or less</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
<?php
$sql="select count(*) as total from donorinfo where age<=20";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
echo '<h1>'.$output.'</h1>';

?>
</div>
<div class="col-auto">

<a href="age20.php"><button type="submit" name="save_data"class="btn btn-primary">Submit</button></a>

</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card border-left-success shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of Donor of Age 20-30</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
<?php
$sql="select count(*) as total from donorinfo where age>20 AND age<=30";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
echo '<h1>'.$output.'</h1>';

?>
</div>
<div class="col-auto">

<a href="age30.php"><button type="submit" name="save_data"class="btn btn-primary">Submit</button></a>

</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card border-left-success shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of Donor of Age 31-40</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
<?php
$sql="select count(*) as total from donorinfo where age>30 AND age<=40";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
echo '<h1>'.$output.'</h1>';

?>
</div>
<div class="col-auto">

<a href="age40.php"><button type="submit" name="save_data"class="btn btn-primary">Submit</button></a>

</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card border-left-success shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of Donor of age more than 40</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
<?php
$sql="select count(*) as total from donorinfo where age>40";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
echo '<h1>'.$output.'</h1>';

?>
</div>
<div class="col-auto">
<a href="age50.php"><button type="submit" name="save_data"class="btn btn-primary">Submit</button></a>

</div>
</div>
</div>
</div>
</div>  
</div>
       

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
