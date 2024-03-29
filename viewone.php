<?php
include("con.php");
$reg=$_POST['reg'];
$sql="select * from stud_info where reg='$reg'";
$result=mysqli_query($conn,$sql);
?>
<center>
<table border="5">
<tr>
<th>RegNo</th>
<th>name</th>
<th>gender</th>
<th>date</th>
<th>course</th>
</tr>
<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<td><?php echo $row['reg']?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['pwd']?></td>
<td><?php echo $row['dob']?></td>
<td><?php echo $row['course']?></td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>