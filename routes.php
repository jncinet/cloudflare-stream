<?php

use Illuminate\Routing\Router;

// 手机端
Route::group([
    'prefix' => 'cf',
    // 控制器命名空间
    'namespace' => 'Jncinet\CloudflareStream\Controllers\Wap',
    'middleware' => ['web'],
    'as' => 'wap.cloudflare.'
], function (Router $router) {
});

// 接口
Route::group([
    'prefix' => 'cf',
    'namespace' => 'Jncinet\CloudflareStream\Controllers\Api',
    'middleware' => ['api'],
    'as' => 'api.cloudflare.'
], function (Router $router) {
    $router->get('upload', 'IndexController@index');
});

// 后台
Route::group([
    'prefix' => config('admin.route.prefix') . '/cf',
    'namespace' => 'Jncinet\CloudflareStream\Controllers\Admin',
    'middleware' => config('admin.route.middleware'),
    'as' => 'admin.cloudflare.'
], function (Router $router) {
//    $router->resource('article_links', 'ArticleLinksController');
});
