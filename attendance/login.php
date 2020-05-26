<?php
include("db.php");


?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="styleeee.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title> LOGIN </title>
</head>
<body>
  <h1><center><B>LOGIN</B></center></h1>

 
  
  <div id="frm">
   <form action="process.php" method="POST">
   
    <p>
       <label for="name">Student Name</label>
       <input type="text" name="name" id="name" class="form-control" required  />
    </p>
    <p>
       <label for="roll">Roll Number</label>
       <input type="text" name="roll" id="roll" class="form-control" required />
    </p>
    <p>
    <a href="loginadmin.php">Click here for admin login</a>
    </p>
    <p>
       <input type="submit" id="btn" value="login"  />
    </p>
   </form>
  </div>
  
 
</body>
</html>