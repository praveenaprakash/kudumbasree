
<?php
session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
<title>KUDUMBASHREE</title>
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

<!--close-left-menu-stats-sidebar-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="Admin Home.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
	</div>
    <h1>Thrift Payment</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            
          </div>
          <div class="widget-content nopadding">
            <form action="thriftpayment1.php" method="post" class="form-horizontal">
			
			 
			  <div class="control-group">
              <label class="control-label">Loan Type </label>
              <div class="controls">
                <input type="text" name="txtln" class="span11" />
                <span class="help-block"></span> </div>
            </div>
			 <div class="control-group">
              <label class="control-label"> Pending Amount </label>
              <div class="controls">
			  <?php		
					
						$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
						$mid=$_SESSION['mid'];
						$sel="select pendingamt from mloanapply where mid=$mid" ;
						$det=mysqli_query($con,$sel);
						$i=mysqli_fetch_array($det); 
						
                echo' <input type="text" class="span11"name="txtamount" readonly value="'.$i['pendingamt'].'" />';
				?>
                <span class="help-block"></span> </div>
            </div>
               <div class="control-group">
              <label class="control-label">Amount </label>
              <div class="controls">
			  
                <input type="text" name="txtam" class="span11" />
                <span class="help-block"></span> </div>
            </div>
              <div class="control-group">
                <label class="control-label">Date of payment</label>
                <div class="controls">
                  <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" name="txtdop"value="01-02-2013" class="datepicker span11">
                  <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
              </div>             
               
              <div class="form-actions">
                <button type="submit" class="btn btn-success">Submit</button> <button type="submit" class="btn btn-success">cancel</button>
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
