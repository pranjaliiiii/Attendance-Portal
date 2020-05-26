<?php
include("header.php");
include("db.php");
$username=$_POST['name'];
$password=$_POST['pass'];


$result=mysqli_query($con,"select * from admininfo where username='$username' and password='$password'");
          
$row=mysqli_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
   header('location:indexx.php');
}
else {
echo "LOGIN UNSUCCESSFULL";
}
?>