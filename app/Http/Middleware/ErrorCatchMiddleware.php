<?php

namespace App\Http\Middleware;

use Closure;
use App\Constants\ErrCode;
use Illuminate\Support\Facades\Log;

class ErrorCatchMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        if (ErrCode::SUCCESS != $response->original['code']) {
            Log::info('request', [$request]);
            Log::info('response', [$response]);
        }

        return $response;
    }
}
