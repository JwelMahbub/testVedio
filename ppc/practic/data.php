<form action="insert.php" method="post">
	<table border="1" cellpadding="5">
    <thead>
    	<th>ID</th>
    	<th>Name</th>
        <th>Sex</th>
    	<th>Age</th>
        <th>Update</th>
        <th>Remove</th>
    </thead>
   
<?php
 	require_once('config.php');
	
	$sql="SELECT * FROM $tbl_name";
	$result=mysql_query($sql);
	while($rows=mysql_fetch_array($result)){

?>
	<tr>
		<td><?php echo $rows['id']; ?></td>
    	<td><?php echo $rows['name']; ?></td>
    	<td><?php echo $rows['sex']; ?></td>
    	<td><?php echo $rows['age']; ?></td>
        <td><a href="update.php?id=<?php echo $rows['id'];?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $rows['id'];?>" onclick="return confirm('Are you sure?')">Delete</a> 
 	</tr>
	<?php } ?>
</table>
</form>
</br><a href="index.php">Back to home Page</a>