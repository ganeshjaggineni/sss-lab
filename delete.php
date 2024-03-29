<?php
include("con.php");
$reg=$_POST["reg"];
$sql="delete from stud_info where reg='$reg'";
if(mysqli_query($conn,$sql))
{
	echo "successfully deleted";
}
else
{
	echo "not deleted";
}
?>