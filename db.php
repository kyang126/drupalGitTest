<?php
$server = 'kyang126.cvopzuwbz6lx.us-west-2.rds.amazonaws.com:3306';
$username = 'info344user';
$password = 'Ampi294157';
$database = 'kyangdb'; 


// Let's connect!
$query = '';
try {
  $connection = new PDO('mysql:host=kyang126.cvopzuwbz6lx.us-west-2.rds.amazonaws.com:3306;dbname=kyangdb', $username,$password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
} catch (PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
} 
?>
