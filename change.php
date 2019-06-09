<?php
 session_start();
 if(isset($_POST['submit']))
 { 
     $email=$_POST['email'];
	 $old=$_POST['old'];
 $new=$_POST['new'];
 $confirm=$_POST['confirm'];
 $con=mysqli_connect('localhost','root','','sessionpractical');
	$query=("select * from signin where password='$old' && email='$email' ");
	$run=mysqli_query($con,$query);
	$num=mysqli_num_rows($run);
	if($num==1)
	{   
         if($confirm==$new)
		 {
			  
		$q=("UPDATE `signin` SET password='$new' WHERE email='$email' ");
	     $runn=mysqli_query($con,$q);
		 	if($runn==true)
			{
				?>
				<script>alert("password changed successfully");</script>
				<?php
		     }
			 else 
	        {
		
		            ?>
		            <script>alert("invalid input");</script>
		            <?php
	         } 
		
	     }
	}
	else 
	{
		
		?>
		<script>alert("invalid inputhkghj");</script>
		<?php
	} 
		
 }
        
		?>
	 



	  
	        
	  
	  <a href="logout.php">logout</a></br>
	   

 
 





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <form method="post" action="">
  
  <div class="form-group">
    <label for="exampleInputPassword1">email</label>
    <input type="text" name="email" class="form-control"  placeholder="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">OLD Password</label>
    <input type="password" name="old" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
   <div class="form-group">
    <label for="exampleInputPassword1">NEW Password</label>
    <input type="password" name="new" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  
   <div class="form-group">
    <label for="exampleInputPassword1">CONFIRM Password</label>
    <input type="password" name="confirm" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>