<?php 		
	$con = mysqli_connect('127.0.0.1', 'root', '', 'dodo');
	$query = mysqli_query($con, "SELECT * FROM pizza WHERE id=".$_GET['id']);
	$query1 = mysqli_query($con, "SELECT * FROM korzina");
	$stroka = $query->fetch_assoc();
	$img = $stroka['img'];
	$title = $stroka['title'];
	$price = $stroka['price'];
	$insert = mysqli_query($con, "INSERT INTO korzina(img, title, price) VALUES ('$img', '$title', '$price')");
	header("Location: index.php");
 ?>