<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

			*
			{
				margin: 0px;
				padding: 0px;
				font-family: calibri;
			}

			.frm
			{
				height: auto;
				width: 30%;
				margin-left: 10%;
				margin-top: 200px;
				box-shadow: 0px 0 10px gray;
				text-align: center;
				display: inline-block;
			}



			input,select
			{
				width: 80%;
				height: 40px;
				margin-top: 20px;
				font-size: 15px;
				text-indent: 20px;
				border-radius: 2px;
				outline: none;
				border: 1px solid lightgray;

			}

			button
			{
				padding: 12px;
				padding-right: 25px;
				padding-left: 25px;
				margin-top: 20px;
				margin-bottom: 20px;
				border:none;
				outline: none;
				background-color:#2ec6dc;
				color: white;
				font-size: 17px;
				border-radius: 2px;
				transition: .3s;
				cursor: pointer;
			}

			button:hover
			{
				background-color: #23a3b5;

			}



	</style>
</head>
<body>

<div class="frm">
	<form method="post"  action="index.php" enctype="multipart/form-data">

		<input type="text" placeholder="name" required name="name" />
		
		<input type="text" placeholder="username" required name="username"  />

		<input type="password" placeholder="password"  name="password" class="np" required/>

		<input type="file" name="pic" required/>

	<!-- <input type="password" placeholder="confirm password"  name="cpassword" class="cp" required/> -->		
		
		
		
		<button type="submit" name="rbt" value="rbt">submit</button>
		
	</form>
</div>


	<div class="frm">
	<form method="post"  action="index.php">

		
		
		<input type="text" placeholder="username" required name="username"  />

		<input type="password" placeholder="password"  name="password" class="np" required/>

	<!-- <input type="password" placeholder="confirm password"  name="cpassword" class="cp" required/> -->		
		
		
		
		<button type="submit" name="lbt" value="lbt">submit</button>
		
	</form>
</div>


	



</body>
</html>



