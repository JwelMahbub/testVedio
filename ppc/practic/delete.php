<?php
	$id=$_GET['id'];
	
	require_once('config.php');
	
	$sql="DELETE FROM $tbl_name WHERE id='$id'";
	
	$result=mysql_query($sql);
	
	if($result)
	{
		echo "success";
	}
	else
	{
		echo "error";
	}

?>


</br><a href="index.php">Back to Home Page</a>