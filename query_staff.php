<?php include("dreamsetupi.php"); ?>

<?php include('header.php'); ?>

<main class="container p-4">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:black;" align="center">Query Staff Operations</h3>
    <ul class="b">
    <h3 style="color:green;" align="center">Queries for Staff Operations</h3> 
    </ul>
    </section>
    </div>
  <div class="row">
    <div class="col-md-4">
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
        <form action="salary_staff.php" method="POST">
          <input type="submit" name="Salary Query" class="btn btn-danger btn-block" value="Staff Salary Query">
        </form>
      </div>

    </div>
    <div class="col-md-4">
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
        <form action="address_staff.php" method="POST">
          <input type="submit" name="Address Query" class="btn btn-warning btn-block" value="Staff Details Query">
        </form>
      </div>
      
    </div>
    <div class="col-md-4">
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
        <form action="staffnumber_staff.php" method="POST">
          <input type="submit" name="Staff Number Query" class="btn btn-primary btn-block" value="Staff Number Query">
        </form>
      </div>

    </div>
</div>
</main>

<?php include('footer.php'); ?>
