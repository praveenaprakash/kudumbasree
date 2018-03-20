	<?php
				session_start();
			
				$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
				$ln=$_POST["txtloantype"];
				$bn=$_POST["txtbank"];
				$des=$_POST["txtdes"];
				$am=$_POST["txtamount"];
				$int=$_POST["txtint"];
				$dur=$_POST["txtdur"];
				$cno=$_POST["txtcn"];
				$cp=$_POST["txtcp"];
				$do=$_POST["txtdo"];
				
				
				
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
				
				$sql="insert into loan(loantype,bank,description,amount,intrst,period,Contactno,Contactp,lastdate)values('$ln','$bn','$des',$am,'$int','$dur',$cno,'$cp','$do');";
				mysqli_query($con,$sql);
				 echo $sql;  
				$_SESSION['username'] = $_POST['txtunitname']; 
				   header('location: Admin Home.html');  
			 
				
		
	?>		