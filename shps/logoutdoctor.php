<?php
	setcookie("cookie_user", "", time()+(86400 * 30), "/", $servername);
	setcookie("user_page", "", time()+(86400 * 30), "/", $servername);
	setcookie("loginfailed", "", time()+(86400 * 30), "/", $servername);
    header("Location:index.php");
?>