	<?php
	
	session_start();
			
				$con=mysqli_connect("localhost","Praveena","pravi","kudumbashree");
				$pt=$_POST["txtptype"];
				$nm=$_POST["txtname"];
				$des=$_POST["txtdes"];
				$pc=$_POST["txtprice"];
				$qty=$_POST["txtqty"];
				
				
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
				
				$sql="insert into product(ptype,name,des,price,qty,photo)values('$pt','$nm','$des','$pc',$qty,'$file');";
				mysqli_query($con,$sql);
				
				
				
	
				
				
				
				 echo $sql;  
				 $_SESSION['username'] = $_POST['txtname']; 
				    header('location: Unit Home.html'); 
		}
			  
				
		
	?>		
	