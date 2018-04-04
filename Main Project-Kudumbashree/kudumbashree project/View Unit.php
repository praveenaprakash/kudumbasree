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
$s=mysqli_query($con,"select * from unitreg");
 echo "<table border ='1' frame=border cellpadding=8 bgcolor=#456667 bordercolor=red cellspacing=5 width=90% height=80% align='center' style=margin:80px;>
		<tr><th colspan=12> <font size=8> NHG UNITS</font></th></tr>
		<tr><th>UNIT NAME</th><th>STARTING DATE</th><th>WARD NO</th><th>NUMBER OF MEMBERS</th><th>PRESIDENT</th><th>SECRETARY</th><th>BANK NAME</th><th>ACNO</th><th>ACTION</th></tr>";
	   while($row=mysqli_fetch_array($s))
	   {
		   $unitid=$row[0];
	   echo"<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td><form method='post' action='View Unit.php'><input type='hidden' name='h1' value='$unitid'><input type='submit' name='edit' value='Edit'></form></td></tr>";	  
	    }
	   echo"</table>"
	   ?>
	</body>
</html>
