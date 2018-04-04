<?php
 $con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
	  $v=$_POST["h1"];
	echo $v;
	 $sss="UPDATE `thrift` SET `status`='y' where unitid=$v";	
     $yyy=mysqli_query($con,$sss);
			
			 header("Location: thriftapproval.php"); 
?>

