<?php

session_start();


echo print_r($_SESSION);
if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}

header("Location: login.php");
die;

?>