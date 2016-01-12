<?php
if(!mysql_connect("localhost","root",""))																		//Wenn man sich nicht mit der Datenbank verbinden kann. (Beispielsweise falsche Zugangsdaten)
{
	die('Verbindungs Problem --> '.mysql_error());
}
if(!mysql_select_db("user"))																					//Wenn die Datenbank nicht gefunden werden kann. (Beispielsweise nicht vorhanden)
{
	die('Kann Datenbank nicht finden --> '.mysql_error());
}


DEFINE ('DB_USER', 'to_be_made');
DEFINE ('DB_PASSWORD', 'to_be_made');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'quizdb'); 

@ $dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (mysqli_connect_error()){
echo "Konnte nicht zur MySQL Datenbank verbinden. Später noch einmal versuchen";
exit();
}
?>