<?php
include "connection.php";
include "header.php";

$Bno = $_GET['Bno'];
$Street = $_GET['Street'];
$Area = $_GET['Area'];
$City = $_GET['City'];
$Pcode = $_GET['Pcode'];
$Tel_No = $_GET['Tel_No'];
$Fax_No = $_GET['Fax_No'];

?>
<main class="container p-4">
    <div class="card card-body">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:blue;" align="center">Inserted Details into your Branch Information</h3>
    <ul class="b">
    <h3 style="color:green;" align="center">BranchNumber: <?php echo $Bno?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:black;" align="center">Street: <?php echo $Street ?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:green;" align="center">Area: <?php echo $Area ?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:black;" align="center">City: <?php echo $City ?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:green;" align="center">Pin Code: <?php echo $Pcode ?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:black;" align="center">Tel_No: <?php echo $Tel_No ?></h3> 
    </ul>
    <ul class="b">
    <h3 style="color:green;" align="center">Fax_No: <?php echo $Fax_No?></h3> 
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
	or mysqli_error($conn_id);

$query= "INSERT INTO branch(Bno, Street, Area, City, Pcode, Tel_No, Fax_No) VALUES ('$Bno', '$Street','$Area','$City','$Pcode','$Tel_No','$Fax_No')";

$result = mysqli_query($conn_id ,$query)
or Die("Cannot Execute Query");


?>



<?php include('footer.php'); 
?>