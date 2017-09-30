<?php
session_start();
if (isset($_POST['submit'])) {
		if (isset($_POST['imones_pavadinimas']) && isset($_POST['imones_kodas']) && (isset($_POST['bronzinis']) || isset($_POST['sidabrinis']) || isset($_POST['auksinis'])) {
			if ($_POST['imones_pavadinimas'] == "xxx" && $_POST['imones_kodas'] == "xxx") && $_POST['gender'] == "sidabrinis" {
				# vartotojo vardas ir slaptazodis tinka

				$_SESSION['user'] = $_POST['username'];
				header('Location:view.php');
				
			} else {
			
				$error = "Wrong username or password";
			}
		}
	} else {
		include "view.php";
	}
	


?>