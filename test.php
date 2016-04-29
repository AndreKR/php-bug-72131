<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/'); // This URL must return a chunked response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

for($i = 0 ; $i < 10 ; $i++)
{
	$result = curl_exec($ch);
	
	var_dump($result);
	var_dump(curl_error($ch));

	if($i >= 2) {
		echo "\n" . 'number_format(null) called' . "\n";
		number_format(null);
	}
	
	echo "\n";
}
