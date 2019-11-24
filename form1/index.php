<!DOCTYPE html>
<html>
<head>
	<title>Form Validation:one</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
     
     if(isset($_POST['submit']))
     {
         $nam = $_POST['name'];
         $mail= $_POST['email'];
         $cell= $_POST['cell'];
         $pass= $_POST['pass'];

         if(empty($nam) || empty($mail) || empty($cell) || empty($pass))
         {
         	echo "<span style='color: red;''>Please fullfill The Total form </span>";
         }
         else
         {
         	 echo "<span style='color: green;''>Success The Data</span>";

         }
     }






	?>
	<div class="log">
		<h2>Log In</h2>
		<hr/>
		<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="post">

		<table>
			<tr>
				<td>
					Name :
				</td>
				<td>
					<input type="text" name="name" placeholder="Enter Name ...">
				</td>
			</tr>
			<tr>
				<td>
					Email :
				</td>
				<td>
					<input type="text" name="email" placeholder="Enter Email ...">
				</td>
			</tr>
			<tr>
				<td>
					Phone :
				</td>
				<td>
					<input type="text" name="cell" placeholder="Enter cell ...">
				</td>
			</tr>
			<tr>
				<td>
					password :
				</td>
				<td>
					<input type="password" name="pass" placeholder="Enter pass ...">
				</td>
			</tr>
			<tr>	
              
              <td>
              	<input type="submit" name="submit" value="Submit">
              </td>
			</tr>
		</table>


		</form>
	</div>

</body>
</html>















