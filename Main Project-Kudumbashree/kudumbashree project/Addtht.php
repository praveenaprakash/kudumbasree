<?php
session_start();

?>

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
<style>


input {
    width: 40%;
} 

</style>
</head>


<body >

<!--Header-part-->
<div id="header"><img src="k.jpg" width="6%">
 </div>
<!--close-Header-part--> 

<!--top-Header-messaages-->
<div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
<!--close-top-Header-messaages--> 

<!--top-Header-menu-->

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
            <h5>ADD THRIFT</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="AddThrift.php" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Unit Name</label>
                <div class="controls">
                 
				 <?php		
					
						$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
						$eid=$_SESSION['eid'];
						$sel="select unitname from empreg where rid=$eid" ;
						$det=mysqli_query($con,$sel);
						$i=mysqli_fetch_array($det); 
						$un=$i['unitname'];
						$s="select unitid from unitreg where uname='$un'";
						$d=mysqli_query($con,$s);
						$j=mysqli_fetch_array($d);
						$_SESSION["uid"]=$j['unitid'];
						echo' <input type="text" class=""name="txtuname" readonly value="'.$i['unitname'].'" />';
                
					?>

				
                </div>
              </div>
			   <div class="control-group">
                <label class="control-label">Member Name</label>
                <div class="controls">
                 <select  name="txtmname" class="" style="width: 455px;">
				  <?php		
					
						$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
						$eid=$_SESSION['eid'];
						$sel="select unitname from empreg where rid=$eid" ;
						$det=mysqli_query($con,$sel);
						$i=mysqli_fetch_array($det); 
						$un=$i['unitname'];
						$sel="select name,mid from membereg where unitid =(select unitid from unitreg where uname='$un')";
						$det=mysqli_query($con,$sel);
						if($det->num_rows >0){
						$areaOptions = "";
							while($row=$det->fetch_assoc()){			
							
							$areaOptions .= '<option value="' . $row['mid'] . '">' . $row['name'] . '</option>';
							
							}
							echo $areaOptions;
							}	
					?>
				</select>
                </div>
              </div>
              
                 <div class="control-group">
                <label class="control-label">Thrift Date</label>
                <div class="controls">
                  <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" name="txtdt"value="01-02-2013" class="">
                  <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
              </div>
			  
              <div class="control-group">
                <label class="control-label">Thrift Week :</label>
                <div class="controls">
                  <input type="text" class=""name="txtwk"  />
                </div>
              </div>
			                <div class="control-group">
                <label class="control-label">Thrift Amount :</label>
                <div class="controls">
                  <input type="text" class=""name="txtamt"  />
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
