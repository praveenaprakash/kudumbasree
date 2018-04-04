	<?php
				session_start();
			
				$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
				$name=$_POST["txtname"];
				$addr=$_POST["txtaddress"];
				$dob=$_POST["txtdob"];
				$phone=$_POST["txtphone"];
				$utype=$_POST["txtusertype"];
				$occupation=$_POST["txtoccupation"];
				$unitname=$_POST["txtunitname"];
				$uname=$_POST["txtusername"];
				$pass=$_POST["txtpassword"];
				
				$file=$_FILES["file"]["name"];
		if( $_FILES['file']['name'] != "" )
		{ 
			$target_path = "imgs/";
			$target_path = $target_path.basename( $_FILES['file']['name']); 
			if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) 
			{
				echo "The file ".basename( $_FILES['file']['name'])." has been uploaded";
			} 
			else
			{
				echo "There was an error uploading the file, please try again!";
			}
				
				
				$sql="insert into empreg(name,address,dob,phone,usertype,occupation,unitname,uname,pass,photo)values('$name','$addr','$dob','$phone','$utype','$occupation','$unitname','$uname','$pass','$file');";
				mysqli_query($con,$sql);
				
				$_SESSION['username'] = $_POST['txtusername']; 
				 header('location:Admin Home.html');  
				
				
		}
	?>		