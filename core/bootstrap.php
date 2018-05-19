<?php

use App\Core\App;
use App\Core\Database\{QueryBuilder, Connection};
use App\Core\Logger;
use Monolog\Logger as MonologLogger;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

App::bind('logger', Logger::getLogger(App::get('config')['logger']['level']));