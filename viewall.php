<?php
include("con.php");
$sql="select * from stud_info";
$result=mysqli_query($conn,$sql);
?>
<center>
<table border="5">
<tr>
<th>RegNo</th>
<th>Name</th>
<th>gender</th>
<th>dob</th>
<th>course</th>
</tr>
<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<td><?php echo $row['reg'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['course'];?></td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>