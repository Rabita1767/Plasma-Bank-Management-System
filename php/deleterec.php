<?php
include 'connection.php';
$id=$_GET['idth'];
$deletequery="delete from receiver where id=$id";
$query=mysqli_query($con,$deletequery);
header('location:receiver.php');
?>