<?php

include "connection.php";

$conn_id = dream_connect()
	or Die("Connection failed");

$query = "Show columns from branch";
$columnnames = mysqli_query($conn_id, $query)
or die("query for show columns doesnt work");

$i = 0;
while($row = mysqli_fetch_row($columnnames))
{
	$columnlist[$i] = $row[0];
	$i++;
}
?>


<?php include('header.php'); ?>

<main class="container p-4">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:black;" align="center">Update Branch Information Into Branch Operations</h3>
    <ul class="b">
    <h3 style="color:green;" align="center">Update your Branch Information</h3> 
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

<form name = "UpdateForm" method = "GET" action = "update_branch_end.php">
<ul class="b">
    <h3 style="color:black;" align="center">Select Column Name of Branch Operations</h3> 
</ul> 

<SELECT name= "columnname_toupdate">
<?php
foreach ($columnlist as $cid)
{	
	print("<option value=\"$cid\"> $cid </option\n>");
}

?>
</select>

<ul class="b">
    <h3 style="color:black;" align="center">Enter the Value to be Updated (New Valule) in Branch Operations</h3> 
</ul> 
<br>
<input type = "Text" name = "update"><br>

<ul class="b">
    <h3 style="color:black;" align="center">Select Column Name of Branch Operations</h3> 
</ul> 
<select name = "columnname">
<?php
foreach ($columnlist as $cid)
{	
	print("<option value=\"$cid\"> $cid </option\n>");
}

?>
</select>

<ul class="b">
    <h3 style="color:black;" align="center">Enter the Value known(Previous Value) in Branch Operations</h3> 
</ul>

<br>
<input type = "Text" name = "update_existing"><br>
<input type="submit" name="submit" class="btn btn-warning btn-block" value="Update Details">
</form>