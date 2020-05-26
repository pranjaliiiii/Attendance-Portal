<?php
include("header.php");
include("db.php");
$flag=0;
if(isset($_POST['submit']))
{
$result=mysqli_query($con,"insert into attendence(student_name,roll_number)values('$_POST[name]','$_POST[roll]')");
if($result)
{
 $flag=1;
}
}
?>

<div class="panel panel-default">
<?php if($flag) { ?>
<div class="alert alert-success">
<strong>succes!</strong> Data succesfully entered;
</div>
<?php   } ?>

<div class="panel-heading">
<h2>
<a class="btn btn-success"href="add.php">Add student</a>
<a class="btn btn-info pull-right" href="indexx.php">Back</a>
</h2>
</div>

<div class="panel-body">
<form action="add.php" method="Post">

<div class="form-group">
<label for="name">Student Name</label>
<input type="text" name="name" id="name" class="form-control" required>
</div>

<div class="form-group">
<label for="roll">Roll number</label>
<input type="text" name="roll" id="roll" class="form-control" required>
</div>

<div class="form-group">
<input type="submit" name="submit" value="submit" class="btn btn-primary" required>
</div>

</form>
</div>