
<?php
// connect database
$connection = mysqli_connect('localhost' ,'root' ,'','class');
//cheacking connection

//mysqli_connect_errno()  -->  this function return errno
//mysqli_connect   --->   show what is the error
//die() --> terminate the script
if(mysqli_connect_errno()){
    die("Connection fail")  . mysqli_error();
}
  
  
?>