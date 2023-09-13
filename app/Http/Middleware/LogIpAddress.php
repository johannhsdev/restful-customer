<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LogIpAddress
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Registrar la dirección IP y la información de entrada
        $ipAddress = $request->ip();
        Log::info('IP Address: ' . $ipAddress);

        if (config('app.debug')) {
            Log::info('Request data: ', ['data' => $request->all()]);
        }

        // Procesar la solicitud
        $response = $next($request);

        // Registrar la información de salida
        if (config('app.debug')) {
            Log::info('Response data: ', ['data' => $response->getContent()]);
        }

        return $response;
    }

}
