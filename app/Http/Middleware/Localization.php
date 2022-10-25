<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Session;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function __construct(Application $app, Request $request) {
        $this->app = $app;
        $this->request = $request;
    }
    
    public function handle(Request $request, Closure $next)
    {
        $this->app->setLocale(session()->get('locale') ?? 'en');
        return $next($request);
    }
}
