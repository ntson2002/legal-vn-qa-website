<?php

$user = "root";
$pass = "root";
$db = "legalVNQA";	
$mysqli = new mysqli("localhost", $user, $pass, $db );
if ($mysqli->connect_errno )
{
    die( "Couldn't connect to MySQL" );
}
?>
