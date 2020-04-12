<?php

$delete = $_GET['delete'];
include "connection.php";
include "header.php";

?>

<main class="container p-4">
    <div class="card card-body">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:blue;" align="center">Deleting Details from your Branch Information</h3>
    <ul class="b">
    <h3 style="color:green;" align="center">Branch Number: <?php echo $delete?></h3> 
    </ul>
    </section>
    </div>
    <form name = "UpdateForm" method = "GET" action = "branch_operations.php">
    <input type="submit" name="Submit" class="btn btn-warning btn-block" value="Return to Branch Operation Home Page">
    </form>
</div>
</main>

<?php

$conn_id = dream_connect()
	or exit("Connection failed");

$result = mysqli_query($conn_id , "DELETE FROM branch WHERE Bno = '$delete';")
or die("Cannot execute query")


?>


<?php include('footer.php'); 
?>