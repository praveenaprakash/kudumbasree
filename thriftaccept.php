<?php
 $con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
	  $v=$_POST["h1"];
	
	 $sss="UPDATE `thrift` SET `status`='y' where unitid=$v";	
     $yyy=mysqli_query($con,$sss);
			echo "$sss";	
			echo "success";
			/* header("Location: thriftapproval.php"); */
?>

