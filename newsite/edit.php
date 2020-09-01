<?php 
	$mail = $_POST['mail'];
	$fd = fopen('mail.php', w);
	fwrite($fd, $mail);
	echo "Mail changed successfully. <a href='index.php'>Move to Home</a>"
?>