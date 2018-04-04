<!DOCTYPE html>
<html lang="en">
<head>
<title>Maruti Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/maruti-style.css" />
<link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />
<style>


input {
    width: 40%;
} 
</style>
</head>
<body>

<!--Header-part-->
<div id="header"><img src="kudumbashree-logo.png" width="21%">
 </div>
<!--close-Header-part--> 

<!--top-Header-messaages-->
<div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
<!--close-top-Header-messaages--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
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
<!--close-top-Header-menu--> 
<!--left-menu-stats-sidebar-->
<!-- div id="sidebar">
  <div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
  </div>
  <a href="#" class="visible-phone"><i class="icon icon-th-list"></i> Common Elements</a><ul>
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
</div -->
<!--close-left-menu-stats-sidebar-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="Admin Home.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    <h1>Add Unit</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            
          </div>
          <div class="widget-content nopadding">
            <form action="addunit.php" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label"> Unit Name :</label>
                <div class="controls">
                  <input type="text" class="span11" name="txtunitname"placeholder=" Name" />
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Date of Started (dd-mm)</label>
                <div class="controls">
                  <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" name="txtsdate"value="01-02-2013" class="datepicker span11">
                  <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
              </div><div class="control-group">
                <label class="control-label">Ward No:</label>
                <div class="controls">
                  <input type="text" class="span11"name="txtwardno" placeholder="Ward No" />
                </div>
              </div>
			                <div class="control-group">
                <label class="control-label">Number of Members :</label>
                <div class="controls">
                  <input type="text" class="span11"name="txtnomember" placeholder="Number of Members" />
                </div>
              
              </div>
             <div class="control-group">
                <label class="control-label">President Name</label>
                <div class="controls">
                  <select name="txtprsdnt">
                     <?php		
					
						$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
						$sel="select name from empreg";
						$det=mysqli_query($con,$sel);
						if($det->num_rows >0){
						$areaOptions = "";
							while($row=$det->fetch_assoc()){			
							
							$areaOptions .= '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
							
							}
							echo $areaOptions;
							}	
					?>

                    
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label"> Secretary Name:</label>
                <div class="controls">
                  <input type="text" class="span11"name="txtscrty" placeholder="Secretary Name" />
                </div> <div class="control-group">
                <label class="control-label">Bank Name :</label>
                <div class="controls">
                  <input type="text" class="span11"name="txtbname" placeholder="Bank Name" />
                </div><div class="control-group">
                <label class="control-label">Account no :</label>
                <div class="controls">
                  <input type="text" class="span11" name="txtacno"placeholder="Account no" />
                </div>
              </div>
				                </div>
								
              <div class="form-actions">
                <button type="submit" class="btn btn-success">Request</button> <button type="submit" class="btn btn-success">cancel</button>
              </div>
			  
            </form>
          </div>
        </div>
      </div>
	  </div>
	  </div>
      <div>
    </div><hr>
    
  </div>
</div>
</div>
<div class="row-fluid">
  <div id="footer" class="span12"></div>
</div>
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/maruti.js"></script> 
<script src="js/maruti.form_common.js"></script>
</body>
</html>
