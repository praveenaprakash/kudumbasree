<?php
session_start();
$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
$user=$_POST["txtusername"];
$pass=$_POST["txtpassword"];
$utype=$_POST["radio"];
if($utype=="Admin")
{
$sq="select * from login where uname='$user' and pass='$pass' ";
}

elseif($utype=="Employee")
{
$sq="select * from empreg where uname='$user' and pass='$pass' ";
}

elseif($utype=="Member")
{
	$sq="select * from membereg where uname='$user' and pass='$pass' ";
}

$res=mysqli_query($con,$sq);
if(mysqli_num_rows($res)>0)
{
	
	$row=mysqli_fetch_assoc($res);
	$type=$row["utype"];
	
	if($row["utype"]==1){
	$_SESSION['uname'] = $_POST['txtusername'];
	header('location:Admin Home.html');
	}
	elseif($row["utype"]==0){
	$_SESSION['uname'] = $_POST['txtusername'];
	$_SESSION['eid']=$row['rid'];
	header('location:Unit Home.php');
	}
	elseif($row["utype"]==3)
	{
	$_SESSION['uname']=$_POST['txtusername'];
	header('location:Member Home.html');
	$_SESSION['mid']=$row['mid'];
	}
	
}	
else
{
	
echo "<script>var confirm = confirm(\"Invalid user!\");
          if(confirm){ 
              window.history.back();
  document.getElementsByName('password').value='';
           }
   else{
   window.history.back();
   document.getElementsByName('password').value='';
   }
          </script>";
}

?>