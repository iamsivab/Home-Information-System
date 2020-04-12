<?php include("dreamsetupi.php"); ?>

<?php include('header.php'); ?>

<main class="container p-4">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:black;" align="center">Branch Operations</h3>
    <ul class="b">
    <h3 style="color:green;" align="center">Queries for Branch Operations, Insert, Update, Delete </h3> 
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
        <form action="insert_branch.php" method="POST">
          <input type="submit" name="insert_branch" class="btn btn-primary btn-block" value="Insert Branch">
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
        <form action="update_branch.php" method="POST">
          <input type="submit" name="update_branch" class="btn btn-warning btn-block" value="Update Branch">
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
        <form action="delete_branch.php" method="POST">
          <input type="submit" name="delete_branch" class="btn btn-danger btn-block" value="Delete Branch">
        </form>
      </div>

    </div>
</div>
</main>

<?php include('footer.php'); ?>
