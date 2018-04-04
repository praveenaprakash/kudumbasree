<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	
<head>
		<title>Loan Payment Approval</title><meta charset="UTF-8" />
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
							 $mid=$_SESSION["mid"];
$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
$eid=$_SESSION['eid'];
						$sel="select unitname from empreg where rid=$eid" ;
						$det=mysqli_query($con,$sel);
						$i=mysqli_fetch_assoc($det); 
						$un=$i['unitname'];
						$sel="select unitid from unitreg where uname='$un'";
						$det=mysqli_query($con,$sel);
						
						$j=mysqli_fetch_assoc($det); 
						$ui=$j['unitid'];

	$sel="SELECT * FROM `thriftpayment` where  status='N' and mid in (select mid from membereg where unitid=$ui)" ;
	
	$res=mysqli_query($con,$sel);
	
	 echo "<table border ='1' frame=border cellpadding=8 bgcolor=#456667 bordercolor=red cellspacing=5 width=90% height=80% align='center' style=margin:80px;>
		<tr><th colspan=12><font  color=red><h5>APPROVE THRIFT LOAN PAYMENT</font></h5></th></tr>
		<tr><th>Member id</th><th>Loan Type</th><th>Payment Date</th><th>Amount</th><th>Action</th></tr>";
	   while($row=mysqli_fetch_array($res))
		 {    
	   		     $md=$row["mid"];  
			  $pd=$row["payid"];  
	  		   
		   $amt=$row["amt"]; 
	   echo"<tr><td>" .$row["mid"]. "</td><td>" .$row["loantype"]. "</td><td>" .$row["pdate"]. "</td><td>" .$row["amt"]. "</td><td><form method='post' action='thriftloanpaymentaccept.php'><input type='submit' name='accept' value='APPROVE'><input type='hidden' name='h2' value='$pd'><input type='hidden' name='h1' value='$md'><input type='hidden' name='h3' value='$amt'></form></tr>";	
	 
 
	    }
	   echo"</table>";
	  
	 
			         
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
