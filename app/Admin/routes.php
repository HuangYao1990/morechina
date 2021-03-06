<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('users', 'UsersController@index');
    $router->get('products', 'ProductsController@index');

    $router->get('products/create','ProductsController@create');
    $router->post('products','ProductsController@store');

    $router->get('products/{id}/edit','ProductsController@edit');
    $router->put('products/{id}','ProductsController@update');


	$router->get('categories', 'CategoriesController@index');
    $router->get('categories/create', 'CategoriesController@create');
    $router->get('categories/{id}/edit', 'CategoriesController@edit');
    $router->post('categories', 'CategoriesController@store');
    $router->put('categories/{id}', 'CategoriesController@update');
    $router->delete('categories/{id}', 'CategoriesController@destroy');
    $router->get('api/categories', 'CategoriesController@apiIndex');

    $router->get('orders', 'OrdersController@index')->name('admin.orders.index');
    $router->get('orders/{order}', 'OrdersController@show')->name('admin.orders.show');
    $router->post('orders/{order}/ship', 'OrdersController@ship')->name('admin.orders.ship');

    $router->post('orders/{order}payconfirm','OrdersController@handlePayConfirm')->name('admin.orders.handle_payconfirm');


    $router->get('serial_num', 'SerialNumController@index');
    $router->get('serial_num/create', 'SerialNumController@create');
    $router->post('serial_num', 'SerialNumController@store');
    $router->get('serial_num/{id}/edit', 'SerialNumController@edit');
    $router->put('serial_num/{id}', 'SerialNumController@update');
});
