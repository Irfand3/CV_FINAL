<?php 
	
	define('ROOT_URL', 'http://localhost/CV/');
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', 'root');
	define('DB_NAME', 'CV');
	

	
	$connection = mysqli_connect('localhost', 'root', 'root', 'CV');
    //check connection
    if (mysqli_connect_errno()) {
      echo "connection failed" . mysqli_connect_errno();
    }

 ?>