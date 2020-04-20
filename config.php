<?php
$HOST = 'localhost';
$USER = 'root';
$PASS = 'root';
$DBNAME = 'easymetro';

$CONNECTION = mysqli_connect($HOST, $USER, $PASS, $DBNAME);

if (!$CONNECTION) {
	die('connection failed');
}
