<?php

	include 'database.php';
	if(isset($_POST['submit']))
	{
		$id=$_POST['id'];
		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$password=$_POST['password'];
		$univer=$_POST['univercity'];



		$sql="INSERT INTO user_info (id, name, GENDER, password, university) VALUES ('$id', '$name', '$gender', '$password', '$univer')";

		if(mysqli_query($con,$sql))
		{
			echo"<script> alert('New recoard inserted')</script>";	
			echo "<script>window.open('input.php','_self')	</script>";
		}
		else
		{
			"error:".mysqli_error($con);
		}
		mysqli_close($con);

	}	



?>