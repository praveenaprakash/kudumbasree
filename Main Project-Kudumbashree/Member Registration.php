	<?php
				session_start();
			
				$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
				$name=$_POST["txtname"];
				$addr=$_POST["txtaddress"];
				$dob=$_POST["txtdob"];
				$age=$_POST["txtage"];
				$phone=$_POST["txtphone"];
				$occupation=$_POST["txtoccupation"];
				$edn=$_POST["txteducn"];
				$uname=$_POST["txtusername"];
				$pass=$_POST["txtpassword"];
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
				$file="";
		$file=$_FILES["file"]["name"];
		if( $_FILES['file']['name'] != "" )
		{
			$target_path = "imgs//";
			$target_path = $target_path.basename( $_FILES['file']['name']); 
			if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) 
			{
				echo "The file ".basename( $_FILES['file']['name'])." has been uploaded";
			} 
			else
			{
				echo "There was an error uploading the file, please try again!";
			}

				// copy( $_FILES['file']['name'], "/SendEmail" ) or 
				//       die( "Could not copy file!");
		}
				$sql="insert into membereg(name,addrs,dob,age,phone,occupn,educn,uname,pass,status,photo)values('$name','$addr','$dob',$age,'$phone','$occupation','$edn','$uname','$pass','$st','$file');";
				mysqli_query($con,$sql);
				echo $sql; 
				$_SESSION['username'] = $_POST['txtusername']; 
				 header('location:Member Home.html');  
				
				
		
	?>		