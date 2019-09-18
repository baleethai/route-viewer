<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/routes', function () {
    $routes = collect(Route::getRoutes())->map(function ($route) {
        return [
            'uri' => $route->uri,
            'as' => $route->action['as'] ?? '',
            'methods' => $route->methods,
            'action' => $route->action['uses'] ?? '',
            'middleware' => $route->action['middleware'] ?? [],
        ];
    });

    return response()->json($routes);
});