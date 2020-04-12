<?php
include "connection.php";
include "header.php";

$Cno = $_GET['Cno'];
$Pno = $_GET['Pno'];
$Date = $_GET['Date'];
$Comment = $_GET['Comment'];

?>
<main class="container p-4">
    <div class="card card-body">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:blue;" align="center">Inserted Details into your Staff Information</h3>
    <ul class="b">
    <h3 style="color:green;" align="center">CNo: <?php echo $Cno?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:black;" align="center">PNo: <?php echo $Pno ?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:green;" align="center">Date: <?php echo $Date?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:black;" align="center">Comment: <?php echo $Comment ?></h3> 
    </ul>
    </section>
    </div>
    <form name = "UpdateForm" method = "GET" action = "viewing_operations.php">
    <input type="submit" name="Submit" class="btn btn-warning btn-block" value="Return to Viewing Operation Home Page">
    </form>
</div>
</main>
<?php
$conn_id = dream_connect()
	or mysqli_error($conn_id);

$query= "INSERT INTO viewing(Cno, Pno, Date, Comment) VALUES ('$Cno', '$Pno','$Date','$Comment')";

$result = mysqli_query($conn_id ,$query);


?>

<?php include('footer.php'); 
?>