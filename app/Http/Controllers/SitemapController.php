<?php

namespace App\Http\Controllers;

class SitemapController extends Controller
{
    // Mapa del sitio para Google: solo páginas indexables (las legales llevan noindex).
    public function __invoke()
    {
        $services = collect(config('servicios'));

        return response()
            ->view('sitemap', compact('services'))
            ->header('Content-Type', 'application/xml');
    }
}
