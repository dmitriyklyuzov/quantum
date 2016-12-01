<?php 

	function DB(){
		// $db = mysqli_connect('localhost', 'root', 'root', 'quantum-db');
		$db = new PDO('mysql:host=localhost;dbname=quantum-db;charset=utf8mb4', 'root', 'root');
		return $db;
	}

?>