<?php
/**
 * Created by PhpStorm.
 * User: MAMI
 * Date: 5/17/2018
 * Time: 3:34 PM
 */

//skapar database config
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "uploaded_files";

//skapar databas connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//kontrollerar db connection
if ($db -> connect_error) {
    die("connection failed: " . $db->connect_error);
}


