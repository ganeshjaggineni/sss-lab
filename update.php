<?php
include("con.php");
$reg=$_POST['reg'];
$sql="select * from stud_info where reg='$reg'";
$result=mysqli_query($conn,$sql);
?>
<center>
<form action="updt.php" method="post">
<table border="5">
<tr>
<th>Regno</th>
<th>name</th>
<th>gender</th>
<th>dob</th>
<th>course</th>
</tr>
<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<td><input type="text" value=<?php echo $row['reg'];?> name="rtf" readonly </td>
<td><input type="text" value=<?php echo $row['name'];?> name="ntf" </td>
<td><input type="text" value=<?php echo $row['gender'];?> name="gtf" </td>
<td><input type="text" value=<?php echo $row['dob'];?> name="dtf" </td>
<td><input type="text" value=<?php echo $row['course'];?> name="ctf" </td>
<td><input type="submit" > </td>
</tr>
<?php
}
?>
</table>
</form>
</html>