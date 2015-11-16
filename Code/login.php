<?php
session_start();
include_once 'databaseconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: quiz.php");
}

if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$res=mysql_query("SELECT * FROM users WHERE email='$email'");
	$row=mysql_fetch_array($res);
	
	if($row['password']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: quiz.php");
	}
	else
	{
		?>
        <script>alert('Falsche Zugangsdaten');</script>
        <?php
	}
	
}
?>