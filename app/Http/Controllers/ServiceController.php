<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::ordenados()->get();

        return view('services.index', compact('services'));
    }

    // Route model binding: Laravel busca el servicio por su slug ({service:slug})
    // y devuelve un 404 automáticamente si no existe.
    public function show(Service $service)
    {
        $otros = Service::ordenados()->whereKeyNot($service->getKey())->get();

        return view('services.show', compact('service', 'otros'));
    }
}
