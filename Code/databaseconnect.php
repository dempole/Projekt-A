<?php
if(!mysql_connect("localhost","root",""))																		//Wenn man sich nicht mit der Datenbank verbinden kann. (Beispielsweise falsche Zugangsdaten)
{
	die('Verbindungs Problem --> '.mysql_error());
}
if(!mysql_select_db("user"))																					//Wenn die Datenbank nicht gefunden werden kann. (Beispielsweise nicht vorhanden)
{
	die('Kann Datenbank nicht finden --> '.mysql_error());
}

?>