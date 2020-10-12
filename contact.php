<?php

if (isset($_Post['submit'])) {

	$name = $_POST['name'];
	$mailfrom = $_POST['email'];
	$subject = $_POST['message'];
	$message = $_POST['message'];
}

$mailTo = "drewg2727@sbcglobal.net";
$headers = "From: ".$mailfrom;
$txt = "You haver received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
?>