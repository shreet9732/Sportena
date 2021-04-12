<?php
	
	$conn = mysqli_connect('localhost','root','','sportena') or die('Error '.mysqli_error($con));
	
		$name = $_POST['cf-name'];
		$email =$_POST['cf-email'];
		
		
		$message = $_POST['cf-message'];
		
		$sqls="INSERT INTO contact VALUES('$name','$email','$message');";
		
		if(mysqli_query($conn,$sqls)) 
			{
				echo "<script>alert('We have got your complaint , our team will get in touch with you as soon as possible:*)')
					window.location.href='index.html';
					</script>";
			}
			else
			{
				echo "<script>alert('Please fill in the valid Credentials :(')
					window.location.href='index.html';
					</script>";
			}
			
	
?>	 