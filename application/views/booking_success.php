<?php
    $email_to = "sweetjamaican@gmail.com";
	$email_from = "donotreply@onelovebodywork.org";
    $email_subject = "One Love Bodywork Reservation Made";
	
	$email_message = "Details:\n\n";
	$email_message .= "First Name: $first_name";
	
	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$outcome = mail($email_to, $email_subject, $email_message, $headers);

?>
<html>
<body>

<br>
<br>
<?php 
if($outcome == true) {
	echo "<p>Thank you for making a reservation with One Love Bodywork!<br>";
	echo "A manager will be in touch with you shortly to confirm your request.</p>";
}
else {
	echo "Mail not accepted for delivery.";
}
?>
</body>
</html>