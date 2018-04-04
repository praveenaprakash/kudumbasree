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


	<div id="header"><img src="bazarlogo.png" width="11%">
 </div>
     		 			<h1><a href="Admin Home.html"></a></h1>
     		 		</div>
     		 		
				<?php
$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
$s=mysqli_query($con,"select * from product");
 echo "<table color#eee bgcolor=#eee cellpadding=10   cellspacing=5 width=90% height=80% align='center' style=margin:80px;>";
 echo"<tr><th>KUDUMBASHREE BAZAR</th></tr>";
		$n=0;
	   while($row=mysqli_fetch_array($s))
	   {
		   $pid=$row[0];
		   $n=$n+1;
		   echo "<td>";
	   echo"<img  width=550%  src='imgs/$row[6]'<br/>$row[1]<br/>$row[2]<br/>$row[4]<br/>";	  
	   echo "</td>";
									if($n==4)
									{
										echo "</tr>";
									}
	   }
	
	   echo"</table>"
	   ?>
	</body>
</html>
