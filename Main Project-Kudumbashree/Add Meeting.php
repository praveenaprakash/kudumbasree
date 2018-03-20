	<?php
				session_start();
			
				$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
				$mv=$_POST["txtmv"];
				$dom=$_POST["txtdom"];
				$tm=$_POST["txttm"];
				$des=$_POST["txtdes"];
				
				
				
				
				/* $cmail="SELECT email FROM registration WHERE email = '$email';";
				$res=mysqli_query($con,$cmail); */
				/* if(mysqli_num_rows($res)>0)
				{
					echo "<script>var confirm = confirm(\"email already exists!\");
					if(confirm){ 
					window.history.back();
					}
						else{
					window.history.back();
					}
					</script>";
					
				} */
				
				$sql="insert into addmeeting(mvenue,mdate,mtime,description)values('$mv','$dom','$tm','$des');";
				mysqli_query($con,$sql);
				 echo $sql;  
				$_SESSION['mvenue'] = $_POST['txtmv'];
				
				   /* header('location:Admin Home.html');   */
			
				
		
	?>		