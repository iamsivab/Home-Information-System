
<?php
session_start();

$server="cs1.ucc.ie";$database="DREAMHOME_sb27";$username="sb27";$password="iungi";
		$conn=mysqli_connect($server,$username,$password,$database);
		if($conn)
			return($conn);
			return(FALSE);

?>

