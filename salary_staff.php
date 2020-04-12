<?php
include "connection.php";
include "header.php";
$conn_id = dream_connect()
	or mysqli_error($conn_id);
?>

<main class="container p-4">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:black;" align="center">Staff Information- Staff Operations</h3>
    </section>
    </div>
<form name = "SalaryForm" method = "GET" action = "salary_staff_end.php">
<div class = "row">
<div class = "col-md-4" align="center">
	<div class="input-group">
      <span class="input-group-addon"><h3 style="color:blue;" align="center">Enter the Salary Range</h3></span>
  </div>
  <div>
      <input class="form-control" name = "salary">
	</div>
</div>
</div>
<br>
<input type="submit" name="Submit" class="btn btn-primary btn-block" value="Display Details">
</form>
</div>
<br>