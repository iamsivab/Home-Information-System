<?php
include "connection.php";
include "header.php";

$Sno = $_GET['Sno'];
$FName = $_GET['FName'];
$LName = $_GET['LName'];
$Address = $_GET['Address'];
$Tel_No = $_GET['Tel_No'];
$Position = $_GET['Position'];
$Sex = $_GET['Sex'];
$DOB = $_GET['DOB'];
$Salary = $_GET['Salary'];
$NIN = $_GET['NIN'];
$Bno = $_GET['Bno'];

?>
<main class="container p-4">
    <div class="card card-body">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:blue;" align="center">Inserted Details into your Staff Information</h3>
    <ul class="b">
    <h3 style="color:green;" align="center">Serial Number: <?php echo $Sno?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:black;" align="center">First Name: <?php echo $FName ?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:green;" align="center">Last Name: <?php echo $LName?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:black;" align="center">Address: <?php echo $Address ?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:green;" align="center">Telephone Number: <?php echo $Tel_No?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:black;" align="center">Position: <?php echo $Position ?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:green;" align="center">Sex: <?php echo $Sex?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:black;" align="center">Date of Birth: <?php echo $DOB ?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:green;" align="center">Salary: <?php echo $Salary ?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:black;" align="center">NIN: <?php echo $NIN ?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:green;" align="center">Branch Number: <?php echo $Bno ?></h3> 
    </ul>
    </section>
    </div>
    <form name = "UpdateForm" method = "GET" action = "staff_operations.php">
    <input type="submit" name="Submit" class="btn btn-warning btn-block" value="Return to Staff Operation Home Page">
    </form>
</div>
</main>
<?php
$conn_id = dream_connect()
	or mysqli_error($conn_id);

$query= "INSERT INTO staff(Sno, FName, LName, Address, Tel_No, Position, Sex, DOB, Salary, NIN, Bno) VALUES ('$Sno', '$FName','$LName','$Address','$Tel_No','$Position','$Sex','$DOB','$Salary','$NIN','$Bno')";

$result = mysqli_query($conn_id ,$query);


?>


<?php include('footer.php'); 
?>