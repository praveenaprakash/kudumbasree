	<?php
				session_start();
			
				$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
				
				$un=$_SESSION["uid"];
				$mn=$_POST["txtmname"];
				$td=$_POST["txtdt"];
				$tw=$_POST["txtwk"];
				$amt=$_POST["txtamt"];
				$st="N";
				
				
				
				
				$sql="insert into thrift(tdate,tweek,tamount,mid,unitid,status)values('$td','$tw',$amt,$mn,$un,'$st');";
				mysqli_query($con,$sql);
				 echo $sql;  
				 
	echo "<script>alert('Request Has been sended successfully');</script>";

				 header('location: Unit Home.php');  
			  
				
		
	?>		