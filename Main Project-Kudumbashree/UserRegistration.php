	<?php
				session_start();
			
				$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
				$name=$_POST["txtname"];
				$addr=$_POST["txtaddress"];
				$phone=$_POST["txtphone"];
				$em=$_POST["txtemail"];
				$uname=$_POST["txtusername"];
				$pass=$_POST["txtpassword"];
				
				
				 $cmail="SELECT email FROM userreg WHERE email = '$email';";
				$res=mysqli_query($con,$cmail); 
				 if(mysqli_num_rows($res)>0)
				{
					echo "<script>var confirm = confirm(\"email already exists!\");
					if(confirm){ 
					window.history.back();
					}
						else{
					window.history.back();
					}
					</script>";
					
				} 
				
				$sql="insert into userreg(name,address,phone,email,uname,pass)values('$name','$addr','$phone','$em','$uname','$pass');";
				mysqli_query($con,$sql);
				echo $sql; 
				$_SESSION['email'] = $_POST['txtemail']; 
				 header('location: Home.html');  
				
				
		
	?>		