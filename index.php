<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{App, Router, Request, Logger};
use App\Core\Exceptions\RouteNotFoundException as RouteNotFoundException;

$logger = App::get('logger');

try {
	Router::load('app/routes.php')
	    ->direct(Request::uri(), Request::method());
	$logger->info('Status Code: 200');
} catch (RouteNotFoundException $e) {
	http_response_code(404);
	Router::load('app/routes.php')->direct('not_found', 'GET');
	$logger->debug('Status Code: 404 - Route not found', ["Error" => $e]);
} catch (Exception $e) {
	http_response_code(500);
	Router::load('app/routes.php')->direct('internal_error', 'GET');
	$logger->error('Status Code: 500 - Internal Server Error', ["Error" => $e]);
}

