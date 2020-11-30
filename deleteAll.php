<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'dodo');
	$zapros_delete = mysqli_query($connect, "DELETE FROM korzina");
	header("Location: index.php");
?>