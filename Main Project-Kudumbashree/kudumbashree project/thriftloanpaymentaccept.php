<?php

session_start();

 $con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
	  $v=$_POST["h1"];
	 $q=$_POST["h2"];
	  $s=$_POST["h3"];
	echo $v;echo'</br>';
	echo $q;
	echo $s;
	 $sss="UPDATE `thriftpayment` SET `status`='Y' where mid=$v";
	 
      $yyy=mysqli_query($con,$sss);
	   $mid=$_SESSION['mid'];
	   $sel="select pendingamt from mloanapply where mid=$mid" ;
						
						$det=mysqli_query($con,$sel);  
						$i=mysqli_fetch_array($det); 
						$p=$i[0]; 
						$pm=$p-$s;
	 $sss="UPDATE `mloanapply` SET pendingamt=$pm where mid=$v";	
			$det=mysqli_query($con,$sss); 
			 echo "$sss";	
			echo "success";
			 header("Location: thriftloanpaymentapproval.php");   
?>

