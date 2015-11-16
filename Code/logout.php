<?php
session_start();

if(!isset($_SESSION['user']))																	//ist man eingeloggt kann man auf das Quiz zugreifen
{
	header("Location: quiz.php");
}

if(isset($_GET['logout']))																		//Loggt man sich aus wird man zur "index.php" geleitet. Dort kann man sich wieder einloggen
{
	session_destroy();
	unset($_SESSION['user']);
	header("Location: index.php");
}
?>