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
        if (isset($response->original['code']) && $response->original['code'] > ErrCode::ABNORMAL_ERROR) {
            Log::info('trace_log', ['request' => [$request->method(), $request->url(), $request->all()], 'response' => $response->original]);
        }

        return $response;
    }
}
