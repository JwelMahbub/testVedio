<html>
	<head>
		<title> New Project </title>	
		
    </head>
		<body>
        <form method="post" action="insert.php">
        	<table>
            	<tr>
                	<td>Name</td>
                    <td>:</td>
                    <td><input type="text" name="name" /></td>
                </tr>
                	<tr>
                	<td>sex</td>
                    <td>:</td>
                    <td><input type="radio" name="sex" value="Male">Male</td>
                    <td><input type="radio" name="sex" value="Female">Female</td>
                </tr>
                <tr>
                	<td>age</td>
                    <td>:</td>
                    <td><select name="age">
                    	<?php for ($i=15; $i<=80; $i++) { ?>
								<option value="<?php echo $i?>"><?php echo $i?></option>
						<?php } ?>
                    </select>
                    </td>
                </tr>
                <tr>
                	<td></td>
                	<td><input type="submit" value="save" name="submit" id="submit"></td>
                    <td></td>
                    <td><input type="reset" name="reset" value="reset"></td>
                </tr>
            </table>
            </form>
            <a href="data.php">View Data</a>
          
        </body>

</html>