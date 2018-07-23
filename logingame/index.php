<?php

	session_start();	

	class Connection
	{

		public $con;
		public function __construct()
		{
			$this->con = mysqli_connect("localhost","root","","db_login");
		}
	}





	class Account extends Connection
	{
		public function registerUser()
		{

			$name=$_POST['name'];
			$username=$_POST['username'];
			$password=sha1($_POST['password']);
			$picname=$_FILES['pic']['name'];
			$picdata=$_FILES['pic']['tmp_name'];
			$path='uploads/'.$picname;
			$ext = pathinfo($path,PATHINFO_EXTENSION);



			$query="insert into account(name,username,password,pic) values('$name','$username','$password','$picname')";


			if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif' || $ext=='JPG' || $ext=='JPEG' || $ext=='PNG' || $ext=='GIF')
			{


			$upload=move_uploaded_file($picdata,$path);

			if($upload)
			{


				$run=mysqli_query($this->con,$query);

				if($run)
				{
					header('location:form.php');

					

				}
				else
				{
					echo "error in registering user";
					echo mysqli_error($this->con);
				}
			}
			else
			{
				echo "error uploading file";
				echo mysqli_error($this->con);
			}
			}
			else
			{
				echo "pls select a image file";
			}

		}

		public function loginUser()
		{

			$username=$_POST['username'];
			$password=sha1($_POST['password']);

			$query="select count(*) from account where username='$username' and password='$password'";

			$run=mysqli_query($this->con,$query);

			if($run)
			{
				$row=mysqli_fetch_row($run);
				
				
				if($row[0]==='1')
				{
					$_SESSION['loggeduser']=$username;
					header('location:index2.php');
				}
				else
				{
					echo "wrong username or password";
				}
				
			}
			else
			{
				echo "error in query";
				echo mysqli_error($this->con);
			}
			


		}


		public function fetchUser()
		{
			$user=$_SESSION['loggeduser'];
			$query="select * from account where username='$user'";

			$run=mysqli_query($this->con,$query);

			while($row=mysqli_fetch_row($run))
			{
				?>
					<img src="uploads/<?php echo $row[4];?>" height="300px">
				<?php
			}


		}


	}





	// object creation

	$a=new Account();

	if(isset($_POST['rbt']))
	{
		$a->registerUser();
	}
	else if(isset($_POST['lbt']))
	{
		$a->loginUser();
	}




?>