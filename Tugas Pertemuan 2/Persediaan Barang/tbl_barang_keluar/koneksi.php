<?php
class connection
{
	public function get_connection()
{
	$host 	="localhost";
	$db	="db_stok";
	$username	="root";
	$password = "";
	$connect = new mysqli($host, $username, $password, $db);
	return $connect;
}
}
