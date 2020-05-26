<?php

include("db.php");
$student_name=$_POST['name'];
$roll_number=$_POST['roll'];


$result=mysqli_query($con,"select * from attendance_records where student_name='$student_name' and roll_number='$roll_number'");

$row=mysqli_fetch_array($result);         


if($row['student_name']!=$student_name || $row['roll_number']!=$roll_number){
   exit("LOGIN UNSUCCESSFUL");
}
?>
<?php
include("header.php");
?>
 <html>
 <div class="panel panel-default">
 <div class="panel-heading">
 <h2>
 <a class="btn btn-success">Home</a>
 <a class="btn btn-info pull-right" href="login.php">Logout</a>
 </h2>
 <h3><b><div class="well text-center">Greetings!</div></b></h3>

 <div class="panel panel-body">

 
 <table class="table table-striped">
 <tr>
 <th>#serial number</th><th>Date</th><th>Attendence_status</th>
 </tr>

 <?php $result=mysqli_query($con,"select date,attendence_status from attendance_records where student_name='$student_name' and roll_number='$roll_number'");
 $serialnumber=0;
 $counter=0;
 $count=0;
 $counts=0;
 
 while($row=mysqli_fetch_array($result))
 {
 $serialnumber++;
 $counts++;
    
 ?>

 <tr>
 <td> <?php echo $serialnumber; ?></td>
 <td> <?php echo $row['date']; ?> </td>
 
 <td>
 <?php if($row['attendence_status']=="Present"){
 echo "Present";
 $count++;
}
else{
 echo "Absent";
}
?>

   
 </td>
 </tr>

 <?php
 $counter++;

 }
 ?>
 
 </table>
<h3><b><div class="well text-center" >
<?php 
echo " Total no. of working days: $counts";
echo "<br>";
echo " Attended: $count";

?>
</div></b></h3>




 
 </div>
 </div>
 </html>
 

