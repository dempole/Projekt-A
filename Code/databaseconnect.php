<?php
if(!mysql_connect("localhost","root",""))
{
	die('Verbindungs Problem --> '.mysql_error());
}
if(!mysql_select_db("user"))
{
	die('Kann Datenbank nicht finden --> '.mysql_error());
}

?>