<?php
	try
	{
		$dsn ="mysql: dbname=id20540069_dbname; host=localhost";
		$user = "id20540069_root";
		$pswd = "7uz{gVf=_}~WFD>W";
		
		$conn = new PDO($dsn, $user, $pswd);
		
		$conn->query("USE id20540069_dbname");
	}
	catch(PDOException $e){
		die("Error Connecting: ".$e->getMessage());
	}
?>