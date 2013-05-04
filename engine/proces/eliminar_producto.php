<?php
	$id = (int) $_GET['id'];
	
	session_start();
		unset($_SESSION['carrito'][$id]);
	session_write_close();
	
	header("Location: " . $_SERVER['HTTP_REFERER']);
?>