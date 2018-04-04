<!DOCTYPE html>
<html lang="en">
	
<head>
		<title>Thrift Approval</title><meta charset="UTF-8" />
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
/* session_start();  */
$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
	$sel="SELECT `unitid`,`tdate`,`tweek`,sum(tamount) FROM `thrift`  where status='N' group by unitid ";
	$res=mysqli_query($con,$sel);
	 echo "<table border ='1' frame=border cellpadding=8 bgcolor=#456667 bordercolor=red cellspacing=5 width=90% height=80% align='center' style=margin:80px;>
		<tr><th colspan=12><font  color=red><h5>APPROVE THRIFT</font></h5></th></tr>
		<tr><th>Unit Id</th><th>Thrift Date</th><th>Thrift Week</th><th>Total Amount</th><th>Action</th></tr>";
	   while($row=mysqli_fetch_array($res))
	   {
		    $thriftid=$row[0];
			 $unitid=$row["unitid"];
            
	   echo"<tr><td>" .$row["0"]. "</td><td>" .$row["tdate"]. "</td><td>" .$row["tweek"]. "</td><td>" .$row["sum(tamount)"]. "</td><td><form method='post' action='thriftaccept.php'><input type='submit' name='accept' value='APPROVE'onclick='Approved()'><input type='hidden' name='h1' value='$unitid'></form></td></tr>";	
	    /* echo "<script>alert('Thrift Approved successfully');</script>";
  */
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
