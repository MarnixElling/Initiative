<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'initiative';

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("connection failed: ".msqli_connect_error());
}

?>