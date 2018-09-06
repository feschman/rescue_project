<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
function _error($msg) {
	echo 'error:' . $msg;
	exit;
}
function getPostValue($name) {
	echo $_POST[$name];
	return @mysql_escape_string(isset($_POST[$name]) ? $_POST[$name] : NULL);
}
function getMysqlCon() {
	// $mysqli = new mysqli('nnw-db1.news.at', 'gewinnspiel', 'Td107cG1AZ4JvZUr9YwS', 'www_gewinnspiel');
	$mysqli = new mysqli('localhost', 'www', 'public', 'www_gewinnspiel');
	if ($mysqli->connect_errno) {
		_error('connect_errno');
	}
	mysqli_query($mysqli, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );
	return $mysqli;
}
function setSuccessRedirect() {
	header('Location: http://www.nnw.local/prod/gewinnspiel/success.php', TRUE, 302);
}
function checkIfPost() {
	if ($_SERVER['REQUEST_METHOD'] != 'POST') {
		_error('REQUEST_METHOD');
	}	
}
function checks() {
	checkIfPost();
}
