<?php

include "connection.php";

$conn_id = dream_connect()
	or Die("Connection failed");

?>

<?php include('header.php'); ?>

<main class="container p-4">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:black;" align="center">Insert Staff Information Into Staff Operations</h3>
    <ul class="b">
    <h3 style="color:green;" align="center">Insert your Staff Information</h3> 
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
<form name = "InsertForm" method = "GET" action = "insert_staff_end.php">
<div class="form-group">
      <input type="text" class="form-control" name="Sno" placeholder="SNo (Example: SL21)" required>
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="FName" placeholder="Fname (Example: John)">
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="LName" placeholder="LName (Example: White)">
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="Address" placeholder="Address (Example: 19 Taylor St, Cranford, London)">
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="Tel_No" placeholder="Tel_No (Example: 0171-884-5112)">
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="Position" placeholder="Position (Example: Manager)">
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="Sex" placeholder="Sex (Example: M)">
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="DOB" placeholder="DOB (Example: 1945-10-01)">
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="Salary" placeholder="Salary (Example: 30000)">
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="NIN" placeholder="NIN (Example: WK442011B)">
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="Bno" placeholder="Bno (Example: B5)">
</div>
<br>
<input type="submit" name="submit" class="btn btn-success btn-block" value="Submit">
</form>
</div>
</div>
</div>
</main>

<?php include('footer.php'); 
?>