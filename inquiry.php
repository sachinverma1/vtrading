<?php 
	$name = $_POST["name"];
	$visitor_email = $_POST["email"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];


		$email_from = 'sachin.verma375@gmail.com';

		$email_subject = "Leads for Trading Course";

		$email_body = "User Name : $name.\n".
						"User email : $email\n".
							"User phone : $phone\n".
								"User message :$message\n";

		$to = "timesinfra1@gmail.com";
		
		$headers = "From: $email_from \r\n";

		$headers = "Reply-To: $visitor_email \r\n";

		mail($to, $email_subject, $email_body, $headers);

		header("Location: index.html");

?>