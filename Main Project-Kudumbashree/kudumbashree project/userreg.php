<?php
session_start();
$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
$user=$_POST["txtusername"];
$pass=$_POST["txtpassword"]; 

$cmail="SELECT uname FROM userreg WHERE uname = '$user';";
				$res=mysqli_query($con,$cmail);
				if(mysqli_num_rows($res)>0)
				{
					echo "<script>var confirm = confirm(\"user already exists!\");
					if(confirm){ 
					window.history.back();
					}
						else{
					window.history.back();
					}
					</script>";
					
				}
				else{
				$sql="insert into userreg(uname,pass)values('$user','$pass');";
				$resi=mysqli_query($con,$sql);
				$_SESSION['username'] = $_POST['txtusername'];
				header('location:Home.html');
				}
				
?>
			
				

?>