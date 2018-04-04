	<?php
				session_start();
			
				$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
				
				$mid=$_SESSION["mid"];
				$ln=$_POST["txtln"];
				$am=$_POST["txtamt"];
				$d=$_POST["txtdo"];
				
				$st="N";
				$s="select sum(th.tamount) from thrift th inner join `membereg` mr on th.unitid=mr.unitid where mr.mid=$mid; ";
				$rs=mysqli_query($con,$s);
				$tot=mysqli_fetch_array($rs);
				if($tot[0]>$am)
				{
					$sq="select * from mloanapply where mid=$mid and status='y' and pendingamt>0";
					$res=mysqli_query($con,$sq);
					if(mysqli_num_rows($res)>0)
					{
						echo "<script>alert('You Cannot Apply');</script>";

					}
					else
					{
					
					
						 $sql="insert into mloanapply(mid,loantype,reqamt,pendingamt,adate,status)values($mid,'$ln',$am,$am,'$d','$st');";
						mysqli_query($con,$sql);
						 echo $sql;  
						 
						echo "<script>alert('Request Has been sended successfully');</script>";

						 header('location: Member Home.html'); 
					}
				}
				else
				{
											echo "<script>alert('You Cannot Apply');</script>";

											header('location: Member Home.html');  

				}
				
		
	?>		