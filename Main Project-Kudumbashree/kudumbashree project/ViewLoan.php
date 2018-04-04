 <!DOCTYPE html>
<html lang="en">
<head>
<title>KUDUMBASHREE</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/maruti-style.css" />
<link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />
</head>
<body>


	<div id="header"><img src="kudumbashree-logo.png" width="21%">
 </div>
     		 			<h1><a href="Admin Home.html"></a></h1>
     		 		</div>
     		 		
				<?php
$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
$s=mysqli_query($con,"select * from loan");
 echo "<table border ='1' frame=border cellpadding=8  bordercolor=red cellspacing=4 width=80% height=70% align='center' style=margin:80px;>
		<tr><th colspan=12><font size=2 > LOAN DETAILS</font></th></tr>
		<tr><th>Loan Type</th><th>Bank Name</th><th>Description</th><th>Amount</th><th>Interest</th><th>Period</th><th>Contact No</th><th>Contact Person</th><th>Last Date </th><th>Action </th></tr>";
	   while($row=mysqli_fetch_array($s))
	   {
		   $loanid=$row[0];
	   echo"<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td><form method='post' action='loandelete.php?x=$row[0]'><input type='hidden' name='h1' value='$loanid'><input type='button' name='Edit' value='Edit'><input type='submit' name='delete' value='Delete' ></form></td></tr>";	  
	    }
	   echo"</table>"
	   ?>
	</body>
</html>
