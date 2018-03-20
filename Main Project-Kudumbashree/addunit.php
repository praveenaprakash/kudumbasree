	<?php
				session_start();
			
				$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
				$uname=$_POST["txtunitname"];
				$sdate=$_POST["txtsdate"];
				$wno=$_POST["txtwardno"];
				$nom=$_POST["txtnomember"];
				$prs=$_POST["txtprsdnt"];
				$sec=$_POST["txtscrty"];
				$bname=$_POST["txtbname"];
				$acn=$_POST["txtacno"];
				$st="N";
				
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
				
				$sql="insert into unitreg(uname,sdate,wardno,nomember,president,secretary,bname,Acno,status)values('$uname','$sdate',$wno,$nom,'$prs','$sec','$bname','$acn','$st');";
				mysqli_query($con,$sql);
				 echo $sql;  
				$_SESSION['username'] = $_POST['txtunitname']; 
				   header('location Admin:Home.html');  
			
				
		
	?>		