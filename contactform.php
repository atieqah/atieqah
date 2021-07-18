<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$mailFrom = $_POST['email'];
	$district = $_POST['district'];
	
	$mailto = "userinterfaceuse@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have recieved registration from ".$name.".\n\n".$message;
	
	mail($mailto, $txt, $headers);
	header("Location:file:http://127.0.0.1:50264/preview/app/index.html?mailsend");
 }
