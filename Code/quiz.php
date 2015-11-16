<?php
session_start();
include_once 'databaseconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");																			//Wenn nicht eingeloggt wird man wieder zur "index.php" geleitet
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
																											/*Obiger Code stellt sicher dass das Quiz nur von Personen durchgeführt werden kann, 
																												die sich vorher auf der Seite registriert haben.
																											*/
?>
