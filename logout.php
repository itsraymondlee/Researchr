<?php
	session_start();

	if (isset($_SESSION['valid_user'])) {
		unset($_SESSION['valid_user']);
		header("Location: index.php");
	}
	session_destroy();
	mysqli_close($connection);
?>