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
        
         $mail= $_POST['email'];
         

         if(empty($mail))
         {
         	echo "<span style='color: red;''>Please fullfill The Total form </span>";
         }
         else
         {
         	        if(filter_var($mail,FILTER_VALIDATE_EMAIL))
			         {
			         		echo "This is Validate";
			         }

			         else
			         {
			         	echo "Not Valide ";
			         }

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
					Email :
				</td>
				<td>
					<input type="text" name="email" placeholder="Enter Email ...">
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















