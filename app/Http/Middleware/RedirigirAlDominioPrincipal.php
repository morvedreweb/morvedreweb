<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirigirAlDominioPrincipal
{
    // Quien entre por www.morvedreweb.com va (301) a morvedreweb.com, con la misma ruta.
    // Así Google ve una sola versión de cada página y no la trata como contenido duplicado.
    // El dominio principal sale de APP_URL, así que no hay nada escrito a mano.
    public function handle(Request $request, Closure $next): Response
    {
        $principal = parse_url((string) config('app.url'), PHP_URL_HOST);

        if (app()->isProduction() && $principal && $request->getHost() === 'www.' . $principal) {
            return redirect()->away('https://' . $principal . $request->getRequestUri(), 301);
        }

        return $next($request);
    }
}
