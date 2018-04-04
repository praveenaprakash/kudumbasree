<?php
$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
$x=$_GET['x'];

						$sql="delete from mloanapply where loanapplyid=$x;";
						mysqli_query($con,$sql);
					 	header('location:mloanapproval.php');  
						
?>
