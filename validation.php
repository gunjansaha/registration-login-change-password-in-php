<?php
   
   
	session_start();
    $email=$_POST['email'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root','','sessionpractical');
	$query=("select * from signin where email='$email' && password='$password' ");
	$run=mysqli_query($con,$query);
	$num=mysqli_num_rows($run);
	if($num==1)
	{   
       $_SESSION["uemail"]=$_POST['email'];
		header('location:home.php');
	}
	else
	{
		?>
		<script>alert("invalid input");</script>
		<?php 
		header('location:singin.php');
	}
	
	
        
?>
