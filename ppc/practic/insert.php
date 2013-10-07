<?php 
	$name=$_POST['name'];
	$sex=$_POST['sex'];
	$age=$_POST['age'];
	
	require_once('config.php');
	$sql="INSERT INTO $tbl_name(id, name, sex, age) VALUES ('', '$name', '$sex', '$age')";
	
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
</br><a href="index.php">Back to Home</a> 

