<?php

HttpRequest::methodRegister('PATCH');
$request = new HttpRequest();
$request->setUrl('https://rapidprod-sendgrid-v1.p.rapidapi.com/alerts/%7Balert_id%7D');
$request->setMethod(HttpRequest::HTTP_METH_PATCH);

$request->setHeaders([
	'content-type' => 'application/json',
	'x-rapidapi-host' => 'rapidprod-sendgrid-v1.p.rapidapi.com',
	'x-rapidapi-key' => '17aa7ad5fbmsh7093477d4b80aecp1d9154jsnbe01233123ea'
]);

$request->setBody('{
    "type": "stats_notification",
    "email_to": "krunalpabari2012@gmail.com",
    "frequency": "daily"
}');

try {
	$response = $request->send();

	echo $response->getBody();
} catch (HttpException $ex) {
	echo $ex;
}
?>