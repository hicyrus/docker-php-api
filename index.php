<?php

require './vendor/autoload.php';

//use Docker\Http\Client as hClient;

use HClient ad HC;



$hc = new HC\HttpClient();

echo "<pre>";

	print_r($hc);
echo "</pre>";


?>