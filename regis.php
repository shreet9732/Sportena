<?php
	
	$conn = mysqli_connect('localhost','root','','sportena') or die('Error '.mysqli_error($con));
	
		$name = $_POST['cf-name'];
		$email =$_POST['cf-email'];
		$phone = $_POST['cf-phone'];
		
		$message = $_POST['cf-message'];
		
		
		$sqls="INSERT INTO resgistration VALUES('$name','$email','$phone','$message');";
		
		if(mysqli_query($conn,$sqls)) 
			{
				echo "<script>alert('resgistration done. You will get a message in your contact :)')
					window.location.href='index.html';
					</script>";
			}
			else
			{
				echo "<script>alert('Please,try after sometime. :(')
					window.location.href='index.html';
					</script>";
			}
			
	
?>	 