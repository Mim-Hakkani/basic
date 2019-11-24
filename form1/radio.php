
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
         echo $_POST['food'];
     }






	?>
	<div class="log">
		<h2>Select The Form Validation </h2>
		<hr/>
		<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="post">

		<table>
			<tr>
				<td>
					
				</td>
				<td>
                   <input type="radio" name="food" value="Alo" id="alo">
                   <label for="alo">Alo</label><br><br>

                   <input type="radio" name="food" value="potol" id="potol">
                   <label for="potol">potol</label><br><br>

                   <input type="radio" name="food" value="Lou" id="lao">
                   <label for="lao">Lou</label><br><br>

                   <input type="radio" name="food" value="Kumra" id="komra">
                   <label for="komra">Kumra</label><br><br>
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















