<?php
include("con.php");
$reg=$_POST["reg"];
$name=$_POST["name"];
$pwd=$_POST["pwd"];
$gender=$_POST["gender"];
$date=$_POST["date"];
$course=$_POST["course"];
$sql="insert into stud_info values('$reg','$name','$pwd','$gender','$date','$course')";
if(mysqli_query($conn,$sql))
{
	echo "data inserted";
}
else
{
	echo "data not inserted";
}