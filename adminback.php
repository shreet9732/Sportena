<?php
$conn = mysqli_connect('localhost','root','','sportena') or die('Error '.mysqli_error($con));
	
		$name = $_POST['name'];
		$email =$_POST['email'];
		$phone = $_POST['pass'];
		
		
		$sqls="INSERT INTO user VALUES('$name','$email','$phone');";
		
		if(mysqli_query($conn,$sqls)) 
			{
				echo "<script>alert('Admin Sign up Successful :)')
					window.location.href='admin_sign_in.html';
					</script>";
			}
			else
			{
				echo "<script>alert('im sorry ... some error has occured :(')
					</script>";
					echo("Error description: " . mysqli_error($conn));
			}
			
	
?>	 