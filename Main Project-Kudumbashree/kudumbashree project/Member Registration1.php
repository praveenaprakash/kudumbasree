<!DOCTYPE html>
<html lang="en">
<head>
<title>KUDUMBASHREE </title>
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
</div
<!--close-top-Header-menu--> 
<!--left-menu-stats-sidebar-->

<!--close-left-menu-stats-sidebar-->

<div id="content">
  <!-- <div id="content-header"> -->
    <!-- <div id="breadcrumb"> <a href="Admin Home.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</div> -->
    <!-- <h1>Employee Registration</h1> -->
  <!-- </div> -->
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Personal-info</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="Member Registration.php" method="post" class="form-horizontal"enctype="multipart/form-data">
              <div class="control-group">
                <label class="control-label"> Name :</label>
                <div class="controls">
                  <input type="text" class="span11" name="txtname" />
                </div>
              </div>
			  <div class="control-group">
                <label class="control-label">Unit Name</label>
                <div class="controls">
                  <select name="txtuname">
                     <?php		
					
						$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
						$sel="select unitid,uname from unitreg";
						$det=mysqli_query($con,$sel);
						if($det->num_rows >0){
						$areaOptions = "";
							while($row=$det->fetch_assoc()){			
							
							$areaOptions .= '<option value="' . $row['unitid'] . '">' . $row['uname'] . '</option>';
							
							}
							echo $areaOptions;
							}	
					?>

                    
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Address :</label>
                <div class="controls">
                  <input type="text" class="span11"name="txtaddress"  />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">DOB (dd-mm)</label>
                <div class="controls">
                  <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" name="txtdob"value="01-02-2013" class="datepicker span11">
                  <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
              </div>
			  
              <div class="control-group">
                <label class="control-label">Age :</label>
                <div class="controls">
                  <input type="text" class="span11"name="txtage"  />
                </div>
              </div>
			                <div class="control-group">
                <label class="control-label">Phone :</label>
                <div class="controls">
                  <input type="text" class="span11"name="txtphone"  />
                </div>
              
              <div class="control-group">
                <label class="control-label">Occupation :</label>
                <div class="controls">
                  <input type="text" class="span11"name="txtoccupation"  />
                </div>
              </div><div class="control-group">
                <label class="control-label">Education</label>
                <div class="controls">
                  <select name="txteducn">
                    <option>SSLC</option>
                    <option>+2</option>
                    <option>Degree</option>
                    
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label"> Username:</label>
                <div class="controls">
                  <input type="text" class="span11"name="txtusername"  />
                </div> <div class="control-group">
                <label class="control-label">Password :</label>
                <div class="controls">
                  <input type="text" class="span11"name="txtpassword"  />
                </div>
				                </div>
								<div class="control-group">
                <label class="control-label">Photo</label>
                <div class="controls">
                  <input type="file" name="file"/>
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
