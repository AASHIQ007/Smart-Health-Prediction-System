<?php
	setcookie("admin_log", "", time()+(86400 * 30), "/", $servername);
	setcookie("loginfailed", "", time()+(86400 * 30), "/", $servername);
    header("Location:admin.php");
?>