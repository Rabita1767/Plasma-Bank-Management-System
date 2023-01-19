<?php


$option = $_POST['bloodtype'];

if ($option == 'A+')
  {
    require('display.php');
                    
  }

if ($option =='A-')
  {
    require('A-.php');
    
  }
  if ($option =='B+')
  {
    require('B+.php');
       
  }
  if ($option =='B-')
  {
    require('B-.php');
    
  }
  if ($option =='O+')
  {
    require('O+.php');
    echo($word); 
  }
  if ($option =='O-')
  {
    require('O-.php');
    echo($word); 
  }
  if ($option =='AB+')
  {
    require('Ab+.php');
    echo($word); 
  }
  if ($option =='AB-')
  {
    require('Ab-.php');
    echo($word); 
  }
?>

