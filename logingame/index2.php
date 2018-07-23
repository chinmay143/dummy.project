<?php

	

	include 'index.php';

	if(!isset($_SESSION['loggeduser']))
	{
		
			header('location:form.php');
	}
	

	$a->fetchUser();




	

?>


		



	<a href="logout.php">logout</a>