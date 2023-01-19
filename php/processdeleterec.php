<?php
$username=$_POST['username'];
$password=$_POST['password'];
$username=stripcslashes($username);
$password=stripcslashes($password);
$con=mysqli_connect("localhost","root","","projectlogin");
$username=mysqli_real_escape_string($con,$username);
$password=mysqli_real_escape_string($con,$password);


$result=mysqli_query($con,"select * from user where username='$username' AND password='$password' ")
or die("Failed to query database".mysql_error());
$row=mysqli_fetch_array($result);
if(($row['username']==$username) && ($row['password']==$password))
{
echo "Log in successful!Welcome ".$username;
header('Location: nextdeleterec.php');
}
else{
    echo "Log in Failed!";
}
