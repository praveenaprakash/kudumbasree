<?php
 $con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
	  $v=$_POST["h1"];
	
	 $sss="UPDATE `mloanapply` SET `status`='y' where loanapplyid=$v";	
     $yyy=mysqli_query($con,$sss);
			echo "$sss";	
			echo "success";
			 header("Location: mloanapproval.php"); 
?>

