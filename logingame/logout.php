
<?php


	session_start();

	unset($_SESSION['loggeduser']);
	// session_destroy();

	header('location:form.php');






?>