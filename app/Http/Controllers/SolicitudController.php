<?php

namespace App\Http\Controllers;

use App\Http\Requests\SolicitudRequest;
use App\Mail\NuevaSolicitud;
use Illuminate\Support\Facades\Mail;
use Throwable;

class SolicitudController extends Controller
{
    public function __invoke(SolicitudRequest $request)
    {
        // Honeypot: un humano no ve este campo; si viene relleno, es un bot.
        // Respondemos "ok" para que el bot no sepa que lo hemos detectado.
        if ($request->filled('_honey')) {
            return response()->json(['ok' => true]);
        }

        $datos = $request->safe()->except('privacidad');

        try {
            Mail::to(config('mail.solicitudes'))->send(new NuevaSolicitud($datos));
        } catch (Throwable $e) {
            report($e); // guarda el error en el log, sin los datos del formulario
            return response()->json(['ok' => false], 503);
        }

        return response()->json(['ok' => true]);
    }
}
