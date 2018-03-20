<!DOCTYPE html>
<html lang="en">
	
<head>
		<title>Membe Approval</title><meta charset="UTF-8" />
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
<!--close-Header-part--> 

<!--top-Header-messaages-->
<!--close-top-Header-messaages--> 

<!--top-Header-menu-->
<!-- <div id="user-nav" class="navbar navbar-inverse"><ul class="nav">
    <li class="" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
    <li class=" dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#">new message</a></li>
        <li><a class="sInbox" title="" href="#">inbox</a></li>
        <li><a class="sOutbox" title="" href="#">outbox</a></li>
        <li><a class="sTrash" title="" href="#">trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
</div>
 --><!--close-top-Header-menu-->

		<div id="sidebar">
			<a href="#" class="visible-phone"><i class="icon icon-th-list"></i> Wizard</a><ul>
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
    <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
  </ul>
		
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

$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
	$sel="SELECT * FROM `membereg`";
	$res=mysqli_query($con,$sel);
	 echo "<table border ='1' frame=border cellpadding=8 bgcolor=#456667 bordercolor=red cellspacing=5 width=90% height=80% align='center' style=margin:80px;>
		<tr><th colspan=12><font size=15 color=black>REGISTRATIONS</font></th></tr>
		<tr><th>Member id</th><th>Name</th><th>Address</th><th>Phone</th><th>accept</th><th>reject</th></tr>";
	   while($row=mysqli_fetch_array($res))
	   {
		    $mid=$row[0];
			 $username=$row["uname"];
            $password=$row["pass"]; 
	   echo"<tr><td>" .$row["mid"]. "</td><td>" .$row["name"]. "</td><td>" .$row["addrs"]. "</td><td>" .$row["phone"]. "</td><td><form method='post'><input type='hidden' name='h1' value='$mid'><input type='hidden' name='h2' value='$username'><input type='hidden' name='h3' value='$password'><input type='submit' name='accept' value='Accept'></form></td><td><form method='post' action='regaccept.php'><input type='hidden' name='h2' value='$mid'><input type='submit' name='reject' value='Reject'></form></td></tr>";	  
	    }
	   echo"</table>";
	  
	   if(isset($_POST["accept"]))
	   {
		   $con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
	  $v=$_POST["h1"];
	 $s=mysqli_query($con,"select * from membereg where mid=$v");
	  while($row=mysqli_fetch_array($s))
	  {
$username=$row["uname"];
$password=$row["pass"];
	  }
	  $ii ="2";
	  $yh="INSERT INTO `login`(`uname`, `pass`, `utype`) VALUES ('$username','$password',$ii)";
			$yy=mysqli_query($con,$yh);
			/* echo "$yh"; */
	 $sss="UPDATE `membereg` SET `status`='Y' where mid=$v";	
     $yyy=mysqli_query($con,$sss);
			/* echo "$sss";	 */
			echo "success";
			header("Location:MemberApproval.php");
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
