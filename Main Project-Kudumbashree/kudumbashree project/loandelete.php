<?php
$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
$x=$_GET['x'];

						$sql="delete from loan where loanid=$x;";
						mysqli_query($con,$sql);
					 	header('location:ViewLoan.php');  
						
?>
