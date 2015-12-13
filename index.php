<?php

use Docker\Http\Client as client;

require './vendor/autoload.php';

$hc = new client\HttpClient();

echo "<pre>";

	print_r($hc);
echo "</pre>";


?>