<?php 

function openDatabaseConnection() {
	try {
	  $conn = new PDO("mysql:host=127.0.0.1;dbname=dynamische_app", 'root', 'mysql');
	  // set the PDO error mode to exception
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  return $conn;
	} catch(PDOException $e) {
	  echo "Connection failed: " . $e->getMessage();
	}
}
