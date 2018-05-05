<?php
$dsn = 'mysql:host=localhost;dbname=Reservation1';
$username = 'dbuser';
$password = 'password';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}
