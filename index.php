<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};
use App\Core\Exceptions\RouteNotFoundException as RouteNotFoundException;

try {
	Router::load('app/routes.php')
	    ->direct(Request::uri(), Request::method());
} catch (RouteNotFoundException $e) {
	http_response_code(404);
	echo "404 - Not Found";
} catch (Exception $e) {
	http_response_code(500);
	echo "500 - Internal Server Error";
}
