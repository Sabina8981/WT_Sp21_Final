<?php


mysql_connect("localhost","root","");
 mysql_select_Wt_sp21_final("student");
 
	 $Name=$_REQUEST[""];
	 $Id=$_REQUEST[""];
	 $DOB=$_REQUEST[""];
	 $Credit=$_REQUEST[""];
	 $CGPA=$_REQUEST[""];
	 $Dept_id=$_REQUEST[""];
	 
	$conn=mysqli_connect($Name,Id,$DOB,$Credit,$CGPA,$Dept_id);

<form method="post">
<table>

<tr>
<th><Name></th>
<th><Id></th>
<th><DOB></th>
<th><CGPA></th>
<th><Credit></th>
<th><Dept_id></th>
</tr>

</form>
</table>
?>