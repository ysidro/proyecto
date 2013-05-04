<?php
	session_start();
		unset($_SESSION['carrito']);
	session_write_close();
	
	header("Location: " . $_SERVER['HTTP_REFERER']);
?>