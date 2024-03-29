<?php
include("con.php");
$reg=$_POST['rtf'];
$name=$_POST['ntf'];
$gender=$_POST['gtf'];
$dob=$_POST['dtf'];
$course=$_POST['ctf'];
$sql="update stud_info set name='$name',gender='$gender',dob='$dob',course='$course' where reg='$reg'";
if(mysqli_query($conn,$sql))
{
	echo "updated successfully";
}
else
{
	echo "not updated";
}