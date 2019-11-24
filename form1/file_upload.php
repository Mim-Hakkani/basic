<!DOCTYPE html>
<html>
<head>
	<title>Form Validation:one</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
     
     require_once('upload.php');


	?>

	<div class="log">
		<h2>Log In</h2>
		<hr/>
		<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="post" enctype="multipart/form-data">


				<input type="file" name="pic">

              	<input type="submit" name="submit" value="Submit">



		</form>
	</div>

</body>
</html>















