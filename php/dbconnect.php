 <?php
/*
	$MYSQL_Server = "localhost";
	$MYSQL_Username = "root";
	$MYSQL_Password = "";
	$MYSQL_Database = "db_name";
	echo "dbconnect<br>";*/

function dbconnect()
{
	$connect = mysqli_connect("remotemysql.com" , "sRsYCnN0Z2" , "wtn1bMv1Wb") ;
	if($connect)
	{
		$handle = mysqli_select_db($connect , "sRsYCnN0Z2") ;
		if($handle)
		{

		}
		else
		{
			echo "could not connect to  db" ; //header("location:error.php") ;
		}
	}
	else
	{
		header("location:error.php") ;
	}
	return $connect ;
}
	
	//$TRIMS_Bridge_url = "http://ec2-54-221-147-64.compute-1.amazonaws.com/trims-middleware/api/trims_bridge.php";

?>