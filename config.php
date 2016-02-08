<?php
//error_reporting(E_ALL);
ini_set('display_errors', 'Off');
try {
	$link = mysqli_connect('136.243.72.73', 'nalo', 'AvH89oU1N', 'poll');
} catch(PDOException $e) {
	echo $e -> getMessage();
	die();
}
?>
