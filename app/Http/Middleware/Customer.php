<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Http\Request;

class Customer extends Middleware{

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('customer_login');
        }
    }
}
