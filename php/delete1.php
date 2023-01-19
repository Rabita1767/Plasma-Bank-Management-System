<?php
include 'connection.php';
$id=$_GET['idth'];
$deletequery="delete from donorinfo where id=$id";
$query=mysqli_query($con,$deletequery);
header('location:A-.php');
?>