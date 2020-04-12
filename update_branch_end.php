<?php

$update = $_GET['update'];
$columnname = $_GET['columnname'];
$columnname_toupdate = $_GET['columnname_toupdate'];
$update_existing = $_GET['update_existing'];
include "connection.php";

?>

<?php

$conn_id = dream_connect()
	or exit("Connection failed");

$result = mysqli_query($conn_id , "UPDATE branch SET $columnname_toupdate = '$update' WHERE $columnname = '$update_existing';")
or die("Cannot execute Update query");


?>
<?php
include "header.php";
?>
<main class="container p-4">
    <div class="card card-body">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:blue;" align="center">Updating <?php echo $columnname?> with <?php echo $update?>, Previous Value <?php echo $update_existing?>  </h3>
    <ul class="b">
    </ul>
    </section>
    </div>
    <form name = "UpdateForm" method = "GET" action = "branch_operations.php">
	<input type="submit" name="Submit" class="btn btn-warning btn-block" value="Return to Branch Operation Home Page">
	</form>

</div>
</main>