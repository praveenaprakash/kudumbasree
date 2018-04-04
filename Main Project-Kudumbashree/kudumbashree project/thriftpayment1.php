	<?php
				session_start();
			
				$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
				
				$mid=$_SESSION["mid"];
				$ln=$_POST["txtln"];
				$am=$_POST["txtam"];
				$d=$_POST["txtdop"];
				
				$st="N";
				
					
					
						 $sql="insert into thriftpayment(mid,loantype,pdate,amt,status)values($mid,'$ln','$d',$am,'$st');";
						mysqli_query($con,$sql);
						 echo $sql;  
						 
						echo "<script>alert('Request Has been sended successfully');</script>";

						 header('location: Member Home.html'); 
					
				/*  else
				{
											echo "<script>alert('Something Went Wrong');</script>";

											header('location: Member Home.html');  
 */
				
				
		
	?>		