<?php

include "connection.php";

$conn_id = dream_connect()
	or Die("Connection failed");

$query="SELECT Sno FROM staff ORDER BY Sno";

$snoquery=mysqli_query($conn_id,$query)or die("Cannot Find Serial Number");

$i=0;

while($row=mysqli_fetch_row($snoquery))
	{
		$snolist[$i]=$row[0];
		$i++;
	}
mysqli_free_result($snoquery);

?>

<?php include('header.php'); ?>

<main class="container p-4">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:black;" align="center">Delete Staff Information Into Staff Operations</h3>
    <ul class="b">
    <h3 style="color:green;" align="center">Delete your Staff Information</h3> 
    </ul>
    </section>
    </div>

<div class="row">
<div class="col-md-8">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
<div class="card card-body">

<form name = "DeleteForm" method = "GET" action = "delete_staff_end.php">

<ul class="b">
    <h3 style="color:black;" align="center">Select Staff Number</h3> 
    </ul> 

<SELECT name= "delete">

<?php

	foreach($snolist as $sid)
		{
			print("<option value=\"$sid\"> $sid </option\n>");
		}
?>

</SELECT>
</div>
<br>

<input type="submit" name="Submit" class="btn btn-warning btn-block" value="Delete">

</form>