	<?php
				session_start();
			
				$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
				$name=$_POST["txtname"];
				$bname=$_POST["txtbname"];
				$branch=$_POST["txtbranch"];
				$cn=$_POST["txtcn"];
				$cvc=$_POST["txtcvc"];
				$exp=$_POST["txtexp"];
				$atm=$_POST["txtatm"];
				$am=$_POST["txtam"];
				
				
				
				 
				$sql="insert into bank(name,bankname,branch,cardno,cvc,expdate,atmpin,amount)values('$name','$bname','$branch','$cn',$cvc,'$exp',$atm,$am);";
				mysqli_query($con,$sql);
				echo $sql; 
			$_SESSION['username'] = $_POST['txtuname']; 
				 header('location:Member Home.html');  
				
				 
		
	?>		