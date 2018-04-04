<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	
<head>
		<title>KUDUMBASHREE</title><meta charset="UTF-8" />
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
				<a href=" Member Home.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<!-- <a href="#">Form elements</a>
				<a href="#" class="current">Form wizard</a> -->
			</div>
                <h1>
				
				</h1>
				
			</div>
		 <?php
	
		 $con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
		 $mid=$_SESSION['mid'];
		 $l="select unitid FROM membereg where mid='$mid'";
		 $red=mysqli_query($con,$l);
		 $i=mysqli_fetch_array($red);
         $un=$i["unitid"];		
		
	echo "<div style='width: 50%';>";

	$sel="SELECT  `unitid`,`tdate`, `tweek`,sum(tamount) FROM `thrift` where unitid='$un'";
	$res=mysqli_query($con,$sel);
echo"<table  cellpadding=5 bgcolor=#456667  cellspacing=10 width=90% height=80% align='center' style=margin:80px>";	
	  echo"<tr><td><input type='label' name='tamt' value='Total Amount' ></td>";
	   while($row=mysqli_fetch_array($res))
	   {
		    $tamount=$row[3];
		 $am=$row["sum(tamount)"];	
		echo "<td><input type='text' name='txtamt' value='";echo $am; echo"'></td>" ;
	
	  	
	    }
		
		echo"<td><form method='post' action='ApplyLoan.html'><input type='submit' name='Apply' value='Apply' ></form></td></tr>";
		
		 echo "</table>" ;
		
	   ?>
			
					</div>		
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
