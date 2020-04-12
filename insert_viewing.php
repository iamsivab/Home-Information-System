<?php

include "connection.php";

$conn_id = dream_connect()
	or Die("Connection failed");

?>

<?php include('header.php'); ?>

<main class="container p-4">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:black;" align="center">Insert Viewing Information Into Viewing Operations</h3>
    <ul class="b">
    <h3 style="color:green;" align="center">Insert your Viewing Information</h3> 
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
<form name = "InsertForm" method = "GET" action = "insert_viewing_end.php">
<div class="form-group">
      <input type="text" class="form-control" name="Cno" placeholder="Cno (Example: CR56)" required>
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="Pno" placeholder="Pno (Example: PA14)" required>
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="Date" placeholder="Date (Example: 1995-05-24)">
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="Comment" placeholder="Comment (Example:too small)">
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