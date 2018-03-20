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
     		 		<!--<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a><ul>
    <li> <a href="Add Unit.html"><i class="icon icon-eye"></i> <span>Add Unit</span></a> </
    <li> <a href="Employee registration.html"><i class="icon icon-eye"></i> <span>Employee Registration</span></a> </li>
        <!-- <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li> -->
    <!-- <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li> -->
    <!--<li><a href="Add Loan.html"><i class="icon icon-eye"></i> <span>Add Loan</span></a></li>
    <li><a href="gallery.html"><i class="icon icon-eye"></i> <span>Add Meeting Details</span></a></li>
	<li><a href="Add Loan.html"><i class="icon icon-eye"></i> <span>Approve Loan</span></a></li>
	<li class="submenu"> <a href="#"><i class="icon icon-eye"></i> <span>View</span></a>
      <ul>
        <li><a href="index2.html">View NHG</a></li>
        <li><a href="gallery.html">View Loan Applications</a></li>
        <li><a href="calendar.html">View Thrift</a></li>
        <li><a href="chat.html">View Products</a></li>
      </ul>
    </li>
	
    <li> <a href="gallery.html"><i class="icon icon-eye"></i> <span>Approve thrift</span></a>
      
    </li>
     		 		<div class="clear"> </div>
     		 	</div>-->
				<?php
$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
$s=mysqli_query($con,"select * from empreg");
 echo "<table border ='1' frame=border cellpadding=8 bgcolor=#456667  cellspacing=5 width=90% height=80% align='center' style=margin:80px;>
		<tr><th colspan=12> EMPLOYEES</font></th></tr>
		<tr><th>NAME</th><th>ADDRESS</th><th>DOB</th><th>PHONE</th><th>USERTYPE</th><th>OCCUPATION</th><th>UNIT NAME</th><th>PHOTO</th><th>Action</th></tr>";
	   while($row=mysqli_fetch_array($s))
	   {
		   $rid=$row[0];
	   echo"<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td><img   src='imgs/$row[11]'</td><td><form method='post' action='ViewEmployee.php'><input type='hidden' name='h1' value='$rid'><input type='submit' name='Edit' value='Edit'></form></td></tr>";	  
	    }
	   echo"</table>"
	   ?>
	</body>
</html>
