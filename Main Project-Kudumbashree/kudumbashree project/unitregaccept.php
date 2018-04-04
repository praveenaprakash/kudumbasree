			<?php
 $con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
	  $v=$_POST["h1"];
	  
	 $s=mysqli_query($con,"select * from unitbereg where unitid=$v");
	  /* while($row=mysqli_fetch_array($s))
	  {
$username=$row["uname"];
$password=$row["pass"];
	  } */
	  /* $ii ="2";
	  $yh="INSERT INTO `login`(`uname`, `pass`, `utype`) VALUES ('$username','$password',$ii)";
			$yy=mysqli_query($con,$yh);
			echo "$yh"; */
	 $sss="UPDATE `unitreg` SET `status`='Y' where unitid=$v";	
     $yyy=mysqli_query($con,$sss);
			echo "$sss";	
			echo "success";
			header("Location: UnitApproval.php");
?>

