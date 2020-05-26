<?php
include("db.php");


?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="styleeeee.css" >
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title> LOGIN </title>
</head>
<body>
  <h1><center><B>LOGIN</B></center></h1>

 
  
   <div id="frm">
   <form action="processadmin.php" method="POST">
   
    <p>
       <label for="name">Username:</label>
       <input type="text" name="name" id="name" class="form-control" required  />
    </p>
    <p>
       <label for="roll">Password:</label>
       <input type="text" name="pass" id="pass" class="form-control" required />
    </p>
    <p>
    <a href="login.php">Click here for student login</a>
    </p>
    <p>
       <input type="submit" id="btn" value="login"  />
    </p>
   </form>
   </div>
  
 
</body>
</html>