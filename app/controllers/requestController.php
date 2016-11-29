<?php 
	
	// if(isset())

	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', 'root');
	define('DB', 'main');

	function DB(){
		$db = mysqli_connect('localhost', 'root', 'root', 'quantum-db');
		return $db;
	}

	$conn = DB();
	$result = $conn -> query('SELECT * FROM Amazon');
	$conn -> close();

	if($result -> num_rows !== 0){
		while($row = $result -> fetch_assoc()){
			$asin = $row['ASIN'];
			$title = $row['Title'];
			$msn = $row['MSN'];
			$price = $row['price'];

			include('row.part.php');

		}
	}
	else echo '0';

?>