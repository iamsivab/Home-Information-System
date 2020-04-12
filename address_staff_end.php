<?php

$stafflname = $_GET['stafflastname'];
include "connection.php";
include "header.php";
$conn_id = dream_connect()
	or mysqli_error($conn_id);

$result = mysqli_query($conn_id, "select Address, Tel_No from staff where LName = '$stafflname'")
	or die("Invalid query");

?>
<main class="container p-4">
    <div class="card card-body">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:blue;" align="center">Staff Details whose Last Name is <?php echo $stafflname?> </h3>

<?php
while ($row = mysqli_fetch_row($result))
{
?>
    <ul class="b">
    <h3 style="color:green;" align="center">Address: <?php printf("%s", htmlspecialchars($row[0])) ?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:black;" align="center">Telepone Number: <?php printf("%s", htmlspecialchars($row[1])); ?></h3> 
    </ul>
<?php
}
?>
<form name = "UpdateForm" method = "GET" action = "staff_operations.php">
    <input type="submit" name="Submit" class="btn btn-warning btn-block" value="Return to Staff Operation Home Page">
    </form>
</section>
</div>
</main>

<?php
mysqli_free_result($result);
?>