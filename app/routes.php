 <?php

    $router->get('', 'PagesController@home');
    $router->get('about', 'PagesController@about');
    $router->get('contact', 'PagesController@contact');

    $router->get('users', 'UsersController@index');
    $router->post('users', 'UsersController@store');

    $router->get('tasks', 'TasksController@index');

    $router->get('not_found', 'ProjectController@notFound');
    $router->get('internal_error', 'ProjectController@internalError');
