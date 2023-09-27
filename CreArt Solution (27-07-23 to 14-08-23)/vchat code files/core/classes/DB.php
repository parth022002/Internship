<?php 
	namespace MyApp;
	use PDO;
	class DB{
		function connect(){
			$db = new PDO("mysql:host=127.0.0.1; dbname=vchat", "root", "");

			return $db; 
		}
	}
	?>

<?php

//for signup
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "vchat";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
?>
