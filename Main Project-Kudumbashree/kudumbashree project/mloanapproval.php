<!DOCTYPE html>
<html lang="en">
	
<head>
		<title>Loan Approval</title><meta charset="UTF-8" />
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
				<a href=" Unit Home.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<!-- <a href="#">Form elements</a>
				<a href="#" class="current">Form wizard</a> -->
			</div>
                <h1>
				
				</h1>
				
			</div>
		 <?php
session_start();
			
$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
	$sel="SELECT * FROM mloanapply where status='N'";
	$res=mysqli_query($con,$sel);
	
	  echo "<table border ='1' frame=border cellpadding=8 bgcolor=#456667 bordercolor=red cellspacing=5 width=90% height=80% align='center' style=margin:80px;>
	  <tr><h5><th colspan=12> LOAN APPLICATIONS</font></th><h5></tr>
		<tr><th>LOAN APPLICATION ID</th><th>LOAN TYPE</th><th>MEMBER ID</th><th>REQUIRED AMOUNT</th><th> DATE OF APPLY</th><th>ACTION</th></tr>";
	   while($row=mysqli_fetch_array($res))
	   {
		    $loanapplyid=$row[0];
			$loanapplyid=$row["loanapplyid"];
			
	   echo"<tr><td>$row[0]</td><td>" .$row["loantype"]. "</td><td>" .$row["mid"]. "</td><td>" .$row["reqamt"]. "</td><td>" .$row["adate"]. "</td><td><form method='post' action='mloanaccept.php'><input type='hidden' name='h1' value='$loanapplyid'><input type='submit' name='accept' value='APPROVE' onclick='approval()'></form></td></tr>";
echo "<script>alert('Approved');</script>";	   
	    }
		
	   echo"</table>" 
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
