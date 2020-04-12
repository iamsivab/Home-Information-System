<?php
include "connection.php";
include "header.php";
$conn_id = dream_connect()
	or mysqli_error($conn_id);

$query = "select LName from staff";
$stafflname = mysqli_query($conn_id, $query)
or die("query for show columns doesnt work");

$i = 0;
while($row = mysqli_fetch_row($stafflname))
{
	$stafflnamelist[$i] = $row[0];
	$i++;
}
?>

<main class="container p-4">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:black;" align="center">Staff Information- Staff Operations</h3>
    </section>
    </div>
<form name = "AddressForm" method = "GET" action = "address_staff_end.php">

<div class = "row-md-12">
<div class = "col-md-12" align="center">
	<div class="input-group">
      <span class="input-group-addon"><h3 style="color:green;" align="center">Details of Staff</h3>
<h3 style="color:black;" align="center">Last Names of Staff</h3> 
<select name = "stafflastname">
</div>
<?php
foreach ($stafflnamelist as $slname)
{	
	print("<option value=\"$slname\"> $slname </option\n>");
}

?>
</select>
<br>
<input type="submit" name="sub" class="btn btn-primary btn-block" value="Display Details">
</div>
</div>
</main>
