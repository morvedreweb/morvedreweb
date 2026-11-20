<?php

namespace App\Http\Controllers;

use App\Models\Service;

class SitemapController extends Controller
{
    // Mapa del sitio para Google: solo páginas indexables (las legales llevan noindex).
    public function __invoke()
    {
        $services = Service::ordenados()->get();

        return response()
            ->view('sitemap', compact('services'))
            ->header('Content-Type', 'application/xml');
    }
}
