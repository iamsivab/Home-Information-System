<?php

include "connection.php";
include "header.php";
$conn_id = dream_connect()
	or mysqli_error($conn_id);


$query = "select Sno from staff";
$sno = mysqli_query($conn_id, $query)
or die("query for show columns doesnt work");

$i = 0;
while($row = mysqli_fetch_row($sno))
{
	$snolist[$i] = $row[0];
	$i++;
}
?>
<div>

<main class="container p-4">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:black;" align="center">Staff Information- Staff Operations</h3>
    </section>
    </div>

<form name = "QueriesForm" method = "GET" action = "staffnumber_staff_end.php">

<div class = "row-md-12">
<div class = "col-md-12" align="center">
	<div class="input-group">
      <span class="input-group-addon"><h3 style="color:green;" align="center">Details of Staff</h3>
<h3 style="color:black;" align="center">Staff Numbers of Staff</h3> 
<select name = "snumber">
</div>

<?php
foreach ($snolist as $sid)
{	
	print("<option value=\"$sid\"> $sid </option\n>");
}
echo "<br>"
?>
</select>
<br>
<br>
<input type="submit" name="sub" class="btn btn-primary btn-block" value="Display Details">
</div>
</div>
</form>
