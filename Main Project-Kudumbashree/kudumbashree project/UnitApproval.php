<!DOCTYPE html>
<html lang="en">
	
<head>

		
		<title>
		Unit Approval</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="css/maruti-style.css" />
		<link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />	
	</head>
	<body>
		
<!--Header-part-->
<div id="header">
  <div id="header"><img src="kudumbashree-logo.png" width="21%">
</div>

		
		
		<div id="content">
			<div id="content-header">
				<div id="breadcrumb">
				<a href="Home.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<!-- <a href="#">Form elements</a>
				<a href="#" class="current">Form wizard</a> -->
			</div>
                <h1>
				
				</h1>
				
			</div>
			
							 <?php

/* 				session_start(); */
			
$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
	$sel="SELECT * FROM `unitreg` where status='N'";
	$res=mysqli_query($con,$sel);
	 echo "<table border ='1' frame=border cellpadding=8 bordercolor=red cellspacing=5 width=90% height=80% align='center' style=margin:80px;>
		<tr><th colspan=12><font  color=red> <h5>APPROVE UNIT</h5> </font></th></tr>
		<tr><th>Member id</th><th>Unit Name</th><th>Starting Date</th><th>Ward No</th><th>Number Of Members</th><th>President</th><th>Secretary</th><th>Bank Name</th><th>Account No</th><th>Accept</th><th>Reject</th></tr>";
	   while($row=mysqli_fetch_array($res))
	   {
		    $unitid=$row[0];
			 /* $username=$row["uname"];
            $password=$row["pass"];  */
	   echo"<tr><td>" .$row["unitid"]. "</td><td>" .$row["uname"]. "</td><td>" .$row["sdate"]. "</td><td>" .$row["wardno"]. "</td><td>" .$row["nomember"]. "</td><td>" .$row["president"]. "</td><td>" .$row["secretary"]. "</td><td>" .$row["bname"]. "</td><td>" .$row["Acno"]. "</td><td><form method='post'><input type='hidden' name='h1' value='$unitid'><input type='submit' name='accept' value='Accept'onclick='Approved()'></form></td><td><form method='post' action='unitregaccept.php'><input type='hidden' name='h2' value='$unitid'><input type='submit' name='reject' value='Reject'></form></td></tr>";	  
	  /*  echo "<script>alert('Unit Approved successfully');</script>";
 */
	    }
	   echo"</table>";
	  
	   if(isset($_POST["accept"]))
	   {
		   $con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
	  $v=$_POST["h1"];
	 $s=mysqli_query($con,"select * from unitreg where unitid=$v");
	  /* while($row=mysqli_fetch_array($s))
	  {
 $username=$row["uname"];
$password=$row["pass"];
	  } */
	  /* $ii ="2"; */
	  /* $yh="INSERT INTO `login`(`uname`, `pass`, `utype`) VALUES ('$username','$password',$ii)";
			$yy=mysqli_query($con,$yh); */
			/* echo "$yh"; */
	 $sss="UPDATE `unitreg` SET `status`='Y' where unitid=$v";	
     $yyy=mysqli_query($con,$sss);
			/* echo "$sss";	 */
			echo "success";
			header("Location:UnitApproval.php");
	   }
	   ?>
			
							
					</div>
				</div>
				
				
			</div>
		</div>
		
		<div class="row-fluid">
      <div id="footer" class="span12">  <a href="http://themedesigner.in"></a> </div>
    </div>
            
            <script src="js/jquery.min.js"></script>
            <script src="js/jquery.ui.custom.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.validate.js"></script>
            <script src="js/jquery.wizard.js"></script>
            <script src="js/maruti.js"></script>
            <script src="js/maruti.wizard.js"></script>
	</body>

</html>
