<?php 
	define('DB_SERVER','localhost');
	define('DB_NAME', 'marquis');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '#9jc>Cn6');
	//Database connection
		try{
			$conn = new pdo("mysql:host=".DB_SERVER."; dbname=".DB_NAME,DB_USER,DB_PASSWORD);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			die("Connection failed".$e->getMessage);
		}
?>