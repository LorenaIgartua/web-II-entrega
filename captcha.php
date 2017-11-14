<?php
	// $name = stripslashes($_POST["name"]);
	// $email = stripslashes($_POST["email"]);
	// $message = stripslashes($_POST["message"]);

	$response_recaptcha = $_POST["g-recaptcha-response"];
echo ($response_recaptcha);
	// $url = 'https://www.google.com/recaptcha/api/siteverify';
	// $data = array(
	// 	'secret' => 'API_SECRET',
	// 	'response' => $recaptcha
	// );
	// $options = array(
	// 	'http' => array (
	// 		'method' => 'POST',
	// 		'content' => http_build_query($data)
	// 	)
	// );
	// $context  = stream_context_create($options);
	// $verify = file_get_contents($url, false, $context);
	// $captcha_success = json_decode($verify);
	// if ($captcha_success->success) {
		// No eres un robot, continuamos con el envío del email
		// ...
		// ...
	// } else {
		// Eres un robot!
	// }
?>
