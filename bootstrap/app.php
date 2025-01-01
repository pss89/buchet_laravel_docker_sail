<?php

use App\Http\Middleware\CustomPostMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // 사용할 미들웨어 추가
        // $middleware->web(
        //     \App\Http\Middleware\CustomPostMiddleware::class
        // );

        // alias 미들웨어 추가
        // CustomPostMiddleware 클래스를 사용해야 함함
        $middleware->alias(['custom-post-mid' => CustomPostMiddleware::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
