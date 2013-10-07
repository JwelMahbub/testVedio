<?php
	$id=$_POST['id'];
	$name=$_POST['name'];
	$sex=$_POST['sex'];
	$age=$_POST['age'];
	
	require_once('config.php');
	$sql="UPDATE $tbl_name SET name='$name', sex='$sex', age='$age' WHERE id='$id'";
	$result=mysql_query($sql);
	
	if($result)
	{
		echo "sucess";
	}
	else
	{
		echo "error";
	}
?>

</br><a href="index.php">Back to Home Page</a>