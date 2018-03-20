	<?php
				session_start();
			
				$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
				
				$un=$_POST["txtuname"];
				$mn=$_POST["txtmname"];
				$td=$_POST["txtdt"];
				$tw=$_POST["txtwk"];
				$amt=$_POST["txtamt"];
				$st="N";
				
				
				
				
				$sql="insert into thrift(tdate,tweek,tamount,mid,unitid,status)values('$td','$tw',$amt,$mn,$un,'$st');";
				mysqli_query($con,$sql);
				 echo $sql;  
				 $_SESSION['username'] = $_POST['txtunitname']; 
				   header('location: Unit Home.html');  
			  
				
		
	?>		