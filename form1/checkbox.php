
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
        

         if(empty($_POST['food']))
         {
         	echo "<span style='color: red;''>Please fullfill The Total form </span>";
         }
         else
         {
         	
         	print_r($_POST['food']) ;

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
					
				</td>
				<td>
					<input type="checkbox" name="food[]" value="Alo" id="alo">
					<label for="alo">Alo</label><br><br>

					<input type="checkbox" name="food[]" value="potol" id="potol">
					<label for="potol">potol</label><br><br>

					<input type="checkbox" name="food[]" value="lau" id="lau">
					<label for="lau">lau</label><br><br>

					<input type="checkbox" name="food[]" value="sosa" id="sosa">
					<label for="sosa">sosa</label><br><br>
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















