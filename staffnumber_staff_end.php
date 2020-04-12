<?php

$staffnumber = $_GET['snumber'];
include "connection.php";
include "header.php";
$conn_id = dream_connect()
	or mysqli_error($conn_id);

$result = mysqli_query($conn_id, "select FNAME, LNAME from staff where Sno = '$staffnumber'")
	or die("Invalid query");

?>
<main class="container p-4">
    <div class="card card-body">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:blue;" align="center">First Name, Last Name of Staff whose Staff Number is <?php echo $staffnumber?> </h3>

<?php
while ($row = mysqli_fetch_row($result))
{
?>
    <ul class="b">
    <h3 style="color:green;" align="center">First Name: <?php printf("%s", htmlspecialchars($row[0])) ?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:black;" align="center">Last Name: <?php printf("%s", htmlspecialchars($row[1])); ?></h3> 
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