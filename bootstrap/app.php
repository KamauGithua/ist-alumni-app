<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\AdminMiddlware;
use Spatie\Permission\Middleware\RoleMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\RoleMiddleware as MiddlewareRoleMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'super-admin' => \App\Http\Middleware\SuperAdmin::class,
            'admin' => \App\Http\Middleware\Admin::class,
            'employer' => \App\Http\Middleware\Employer::class,
            'alumni' => \App\Http\Middleware\Alumni::class,
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
      
         ]);
       
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
