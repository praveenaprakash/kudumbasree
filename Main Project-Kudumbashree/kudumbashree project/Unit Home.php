
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
    <li class=" dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important"></span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#">new message</a></li>
        <li><a class="sInbox" title="" href="#">inbox</a></li>
        <li><a class="sOutbox" title="" href="#">outbox</a></li>
        <li><a class="sTrash" title="" href="#">trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html">Logout</span></a></li>
  </ul>
</div>

<!--close-top-Header-menu-->

<div id="sidebar"><a href="#" class="visible-phone"></i> Dashboard</a><ul>
    
    <li> <a href="MemberApproval.php"><i class="icon icon-eye"></i> <span>Approve  Member</span></a> </li>
     <li> <a href="Add Unit.php"><i class="icon icon-eye"></i> <span>Add Unit</span></a> </li> 
   
    <li><a href="Add Product.html"></i> <span>Add product</span></a></li>
	<li> <a href="Addtht.php"></i> <span>Add thrift</span></a>
      
	<!-- <li><a href="Add Loan.html"><i class="icon icon-tint"></i> <span>Approve Loan</span></a></li> -->
	<li><a href="unitdeposit.php"><i class="icon icon-eye"></i> <span>View Deposit Balance</span></a></li>
	<li><a href="UnitViewLoan.php"><i class="icon icon-eye"></i> <span>View Loan Details</span></a></li>
	<li><a href="Add Loan.html"><i class="icon icon-eye"></i> <span>View Member</span></a></li>
	<li><a href="mloanapproval.php"><i class="icon icon-eye"></i> <span> View Loan Requests</span></a></li>
	<li><a href="thriftloanpaymentapproval.php"><i class="icon icon-eye"></i> <span> View Loan Payments</span></a></li>
	<li><a href="UnitViewMeeting.php"><i class="icon icon-eye"></i> <span> View Meetings</span></a></li>
	
      
	
      
    </li>
  
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="Home.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>  Home</a></div>
  </div>
  <div class="container-fluid">
   	<div class="quick-actions_homepage">
    <ul class="quick-actions">
         
		  
        </ul>
   </div>
   
    
  </div>
</div>
</div>
</div>
<!-- <div class="row-fluid">
  <div id="footer" class="span12"> 2012 &copy; Marutii Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div> -->
<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/maruti.js"></script> 
<script src="js/maruti.dashboard.js"></script> 
<script src="js/maruti.chat.js"></script> 
 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
