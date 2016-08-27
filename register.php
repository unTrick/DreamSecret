<!DOCTYPE HTML>
	
<html>

<head>
<title></title>

<style type="text/css">

*{
	margin: 0px auto;
	padding: 0px auto;
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
		color: white;

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
	
	<div class="main-container">
		<img src="img/logomuna.jpg">
		<div class="form-contain">
			<form method="POST" action="login.php">
				<label>Organization:</label>
				<input type="text" name="org">
				<label>Ranger Name:</label>
				<input type="text" name="rname">
				<label>Password:</label>
				<input type="password" name="pass">
				<label>Complete Address:</label>
				<input type="text" name="address">
				<label>Municipality:</label>
				<input type="text" name="city">
				<label>Display Picture:</label>
				<input type="file" name="picture" >				
				<p></p>
				<input type="submit" value="LOGIN" name="login"><input type="submit" value="REGISTER" name="reg">

			</form>

		</div>

	</div>


</body>


</html>

<?php 


?>
