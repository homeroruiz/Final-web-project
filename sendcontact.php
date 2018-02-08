<?php

// Define some constants
define( "RECIPIENT_EMAIL", "hmro.contact@gmail.com" ); //UPDATE THIS TO YOUR EMAIL ID
define( "EMAIL_SUBJECT", "Website Visitor Message" ); //UPDATE THIS TO YOUR SUBJECT

// Read the form values
$senderName = isset( $_POST['name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$original_message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";
$message = 'Name: '.$senderName.'<br/>Email: '.$senderEmail.'<br/>Message: '.$original_message;

$url = 'https://api.sendgrid.com/';
$user = 'app87474532@heroku.com';
$pass = 'wwnmvbls1896';

$params = array(
    'api_user'  => $user,
    'api_key'   => $pass,
    'to'        => RECIPIENT_EMAIL,
    'subject'   => EMAIL_SUBJECT,
    'html'      => $message,
    'from'      => $senderName
  );

$request =  $url.'api/mail.send.json';

// Generate curl request
$session = curl_init($request);
// Tell curl to use HTTP POST
curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
curl_setopt($session, CURLOPT_HEADER, false);
// Tell PHP not to use SSLv3 (instead opting for TLS)
//curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);

//Turn off SSL
curl_setopt($session, CURLOPT_SSL_VERIFYPEER, false);//New line
curl_setopt($session, CURLOPT_SSL_VERIFYHOST, false);//New line

curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// obtain response
$response = curl_exec($session);

// print everything out
var_dump($response,curl_error($session),curl_getinfo($session));

curl_close($session);

if ( $response != false )
{
?>
	<script>
		window.location='thanks.php';
	</script>
<?php
}
else
{
	echo "<h1>ooops, something went wrong. Please try again.</h1>";
}
?>
