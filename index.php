<?php include("dreamsetupi.php"); ?>

<?php include('header.php'); ?>

<main class="container p-4">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:black;" align="center">Enter your Information System</h3>
    <ul class="b">
    <h3 style="color:green;" align="center">Create, Retrieve, Update, Delete With Dream Home Information System </h3> 
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
        <form action="branch_operations.php" method="POST">
          <input type="submit" name="branch_operations" class="btn btn-success btn-block" value="Branch Operations">
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
        <form action="staff_operations.php" method="POST">
          <input type="submit" name="staff_operations" class="btn btn-success btn-block" value="Staff Operations">
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
        <form action="viewing_operations.php" method="POST">
          <input type="submit" name="viewing_operations" class="btn btn-success btn-block" value="Viewing Operations">
        </form>
      </div>

    </div>
    
  </div>
</main>

<?php include('footer.php'); ?>
