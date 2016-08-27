<!DOCTYPE HTML>
	
<html>

<head>
<title></title>

<style type="text/css">

*{
	margin: 0px auto;
	padding: 0px auto;
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		body {
		width: 100%;
		font-family: arial;
	}

	.main-container{
		margin-top: 300px;
		width: 100%;
		clear: both;
		text-align: center;

	}

	img {
		width: 300px;
		margin-bottom: 25px;
	}

	.form-contain {
		width: 60%;
		border-radius: 30px;
		background-color: rgba(1,1,1,.75);
		text-align: center;
		clear: both;
		padding-top: 80px;
		padding-bottom: 60px;
	}

	label {
		width: 100%;
		font-size: 24px;
		color: white;
		float: left;
		text-align: center;
		margin: 5px;
	}

	input[type="text"]{
		border-radius: 8px;
		height:40px; 
		clear:both;
		width: 400px;
		text-align: center;
		margin-bottom: 25px;
	}

	input[type="password"] {
		border-radius: 8px;
		height:40px; 
		clear:both;
		text-align: center;
		width: 400px;
		margin-bottom: 25px;
	}

	input[type="submit"]{
		width: 180px;
		height: 40px;
		margin: 20px;
		border-radius: 8px;
		background-color: rgb(0,176,78);
		border-color: transparent;
		color: 

	}

	p {
		margin-bottom: 25px;
		width: 100%;
		color: red;
	}


}

@media only screen and (min-width: 540px) and (min-height: 960px) and (orientation: portrait){
	body {
		width: 100%;
		font-family: arial;
	}

	.main-container{
		margin-top: 300px;
		width: 100%;
		clear: both;
		text-align: center;

	}

	img {
		width: 300px;
		margin-bottom: 25px;
	}

	.form-contain {
		width: 60%;
		border-radius: 30px;
		background-color: rgba(1,1,1,.75);
		text-align: center;
		clear: both;
		padding-top: 80px;
		padding-bottom: 60px;
	}

	label {
		width: 100%;
		font-size: 24px;
		color: white;
		float: left;
		text-align: center;
		margin: 5px;
	}

	input[type="text"]{
		border-radius: 8px;
		height:40px; 
		clear:both;
		width: 400px;
		text-align: center;
		margin-bottom: 25px;
	}

	input[type="password"] {
		border-radius: 8px;
		height:40px; 
		clear:both;
		text-align: center;
		width: 400px;
		margin-bottom: 25px;
	}

	input[type="submit"]{
		width: 180px;
		height: 40px;
		margin: 20px;
		border-radius: 8px;
		background-color: rgb(0,176,78);
		border-color: transparent;
		color: 

	}

	p {
		margin-bottom: 25px;
		width: 100%;
		color: red;
	}



}

</style>
</head>

<body>

	<?php 
		if (!isset($_POST['login'])) {
					
				$warning = "";
				}

	?>
	
	<div class="main-container">
		<img src="img/logomuna.jpg">
		<div class="form-contain">
			<form method="POST" action="login.php">
				<label>Ranger Name:</label>
				<input type="text" name="rname">
				<label>Password:</label>
				<input type="password" name="pass">
				<p><?php
				echo $warning; ?></p>
				<input type="submit" value="LOGIN" name="login"><input type="submit" value="REGISTER" name="reg">

			</form>

		</div>

	</div>


</body>


</html>

<?php 



if(isset($_POST['login'])){


$name = $_POST['rname'];
$pass = $_POST['pass'];

if(($name == "patrick") && ($pass == "pass")){
	$warning = "Success!";
}

else {
	$warning = "* Wrong Password of Username";
}


}

?>
