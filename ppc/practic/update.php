<html>
	<head>
		<title>Insert/Update/Delete</title>	
		
    </head>
		<body>
        <?php
		$id=$_GET['id'];
		require_once('config.php');
	
		$sql="SELECT * FROM $tbl_name WHERE id='$id'";
		$result=mysql_query($sql);
		$rows=mysql_fetch_array($result);
		
		?>
        <form method="post" action="updatedata.php">
        	<table>
            <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
            
            	<tr>
                	<td>Name</td>
                    <td>:</td>
                    <td><input type="text" name="name" value="<?php echo $rows['name']; ?>" /></td>
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
                    	<option value="<?php echo $rows['age']; ?>"><?php echo $rows['age']; ?></option>
                    	<?php for ($i=15; $i<=80; $i++) { ?>
								<option value="<?php echo $i?>"><?php echo $i?></option>
						<?php } ?>
                        
                    </select>
                    </td>
                </tr>
                <tr>
                	<td></td>
                	<td><input type="submit" value="update"></td
                    ><td></td>
                    <td><input type="reset" value="reset"></td>
                </tr>
            </table>
            </form>
            <a href="data.php">View Data</a>
        
        </body>

</html>