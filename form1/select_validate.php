
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
         echo $_POST['ram'];
     }






	?>
	<div class="log">
		<h2>Select The Form Validation </h2>
		<hr/>
		<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="post">

		<table>
			<tr>
				<td>
					select the ram
				</td>
				<td>
					<select name="ram" id="">
						<option value="">-Select-</option>
						<option value="2Gb">2Gb</option>
						<option value="4Gb">4Gb</option>
						<option value="8Gb">8Gb</option>
						<option value="16Gb">16Gb</option>
						<option value="32Gb">Gb</option>
					</select>
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















