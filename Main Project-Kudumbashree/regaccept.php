			<?php
 $con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
	  $v=$_POST["h1"];
	 $s=mysqli_query($con,"select * from membereg where mid=$v");
	  while($row=mysqli_fetch_array($s))
	  {
$username=$row["uname"];
$password=$row["pass"];
	  }
	  $ii ="2";
	  $yh="INSERT INTO `login`(`uname`, `pass`, `utype`) VALUES ('$username','$password',$ii)";
			$yy=mysqli_query($con,$yh);
			echo "$yh";
	 $sss="UPDATE `membereg` SET `status`='Y' where mid=$v";	
     $yyy=mysqli_query($con,$sss);
			echo "$sss";	
			echo "success";
			header("Location:Member Approval.php");
?>

