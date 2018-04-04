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
$s=mysqli_query($con,"select * from addmeeting");
 echo "<table border ='1' frame=border cellpadding=8 bgcolor=#456667 bordercolor=red cellspacing=5 width=90% height=80% align='center' style=margin:80px;>
		<tr><th colspan=12>  <h5><font color=red>MEETING DETAILS</h5></font></th></tr>
		<tr><th>MEETING VENUE</th><th>MEETING DATE</th><th>MEETING TIME</th><th>DESCRIPTION</th><th>ACTION</th></tr>";
	   while($row=mysqli_fetch_array($s))
	   {
	   echo"<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td><form method='post' action='ViewMeeting.php'><input type='submit' name='edit' value='Edit'></form></td></tr>";	  
	    }
	   echo"</table>"
	   ?>
	</body>
</html>
