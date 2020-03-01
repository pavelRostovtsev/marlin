<?php
	ob_start();
	setcookie('login', "", time() - 3600 * 24 * 30, "/");
	unset($_COOKIE['login']);
	header('Location: /index.php');
   ob_end_flush();

?>